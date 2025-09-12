<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB ;

class HomeController extends Controller
{
    public function blog_list()
    {
        $blogs = Blog::all();
        return view('admin.blogs.blog_list', compact('blogs'));
    }

    public function blog_create()
    {
        $blog_categories = BlogCategory::all(); // Assuming you have a BlogCategory model
        return view('admin.blogs.blog_create', compact('blog_categories'));
    }

    public function blog_store(Request $request)
    {
        try {

            if($request->has('image')){
                $path = $request->file('image')->move(public_path('assets/img/news'), 'post-' . time() . '.jpg');
            }
            DB::beginTransaction();
            Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => 'assets/img/news/' . pathinfo($path)['basename'],
                'blog_category_id' => $request->blog_categories_id,
                'created_by' => Auth::user()->id,
                'seo_meta_data' => json_encode([
                    'page_title' => $request->meta_title,
                    'page_description' => $request->meta_description,
                    'page_keywords' => $request->meta_keywords,
                    'page_url' => $request->meta_keywords,
                    'page_image' => $request->meta_keywords,
                ]),
            ]);
            DB::commit();
            return redirect()->route('admin.blogs')->with('success', 'Blog created successfully.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function blog_edit($id)
    {
        $blog = Blog::findOrFail($id);
        $blog_categories = BlogCategory::all();
        $seo_data = json_decode($blog->seo_meta_data, true);
        return view('admin.blogs.blog_edit', compact('blog', 'blog_categories','seo_data'));
    }

    public function blog_update(Request $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'blog_category_id' => $request->blog_categories_id,
                'seo_meta_data' => json_encode([
                    'page_title' => $request->meta_title,
                    'page_description' => $request->meta_description,
                    'page_keywords' => $request->meta_keywords,
                    'page_url' => $request->meta_keywords,
                    'page_image' => $request->meta_keywords,
                ]),
            ];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->move(public_path('assets/img/news'), 'post-' . time() . '.jpg');
                $data['image'] = 'assets/img/news/' . pathinfo($path)['basename'];
            }

            DB::beginTransaction();
            $blog->update($data);
            DB::commit();
            return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function blog_view($id)
    {
        $blog = Blog::findOrFail($id);
        $seo_data = json_decode($blog->seo_meta_data, true);
        return view('admin.blogs.blog_view', compact('blog', 'seo_data'));
    }

    public function blog_delete($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if($blog){
                DB::beginTransaction();
                $blog->delete();
                DB::commit();
            }
            return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
