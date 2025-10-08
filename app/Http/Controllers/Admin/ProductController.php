<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_list()
    {
        $products = Product::all();
        return view('admin.products.product_list', compact('products'));
    }

    public function product_create()
    {
        return view('admin.products.product_create');
    }

    public function product_store(Request $request)
    {
        try {

            if ($request->has('image')) {
                $path = $request->file('image')->move(public_path('assets/img/news'), 'post-' . time() . '.jpg');
            }
            DB::beginTransaction();
            Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'product_type' => $request->product_type,
                'price' => $request->price,
                'image' => 'assets/img/news/' . pathinfo($path)['basename'],
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
            return redirect()->route('admin.products')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function product_edit($id)
    {
        $product = Product::findOrFail($id);
        $seo_data = json_decode($product->seo_meta_data, true);
        return view('admin.products.product_edit', compact('product', 'seo_data'));
    }

    public function product_update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'product_type' => $request->product_type,
                'price' => $request->price,
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
            $product->update($data);
            DB::commit();
            return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function product_view($id)
    {
        $product = Product::findOrFail($id);
        $seo_data = json_decode($product->seo_meta_data, true);
        return view('admin.products.product_view', compact('product', 'seo_data'));
    }

    public function product_delete($id)
    {
        try {
            $product = Product::findOrFail($id);
            if ($product) {
                DB::beginTransaction();
                $product->delete();
                DB::commit();
            }
            return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
