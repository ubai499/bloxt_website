<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    //
    public function blog_category_list()
    {
        $blog_categories = BlogCategory::all();
        return view('admin.blog_categories.blog_category_list', compact('blog_categories'));
    }

    public function blog_category_create()
    {
        return view('admin.blog_categories.blog_category_create');
    }
    public function blog_category_store(Request $request)
    {
        try {
            DB::beginTransaction();
            BlogCategory::create([
                'title' => $request->title,
                'description' => $request->description,
                'created_by' => Auth::user()->id,
            ]);
            DB::commit();

            return redirect()->route('admin.blog_categories')->with('success', 'Blog Category created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create blog category: ' . $e->getMessage()
            ], 500);
        }
    }

    public function blog_category_edit($id)
    {
        $blog_category = BlogCategory::findOrFail($id);
        return view('admin.blog_categories.blog_category_edit', compact('blog_category'));
    }

    public function blog_category_update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $blog_category = BlogCategory::findOrFail($id);
            $blog_category->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            DB::commit();

            return redirect()->route('admin.blog_categories')->with('success', 'Blog Category updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update blog category: ' . $e->getMessage()
            ], 500);
        }
    }

    public function blog_category_delete($id)
    {
        try {
            $blog_category = BlogCategory::findOrFail($id);
            if ($blog_category) {
                DB::beginTransaction();
                $blog_category->delete();
                DB::commit();
            }

            return redirect()->route('admin.blog_categories')->with('success', 'Blog Category deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete blog category: ' . $e->getMessage()
            ], 500);
        }
    }

    
}
