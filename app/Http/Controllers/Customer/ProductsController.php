<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('customer.products.index', compact('products'));
    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('customer.products.product_view', compact('product'));
    }
    
}
