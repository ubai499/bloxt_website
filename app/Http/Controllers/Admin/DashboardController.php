<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Quotes;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs_count = Blog::count();
        $products_count = Product::count();
        $quotations_count = Quotes::count();
        $subscribers_count = Subscriber::count();
        return view('admin.dashboard', compact('blogs_count','products_count','quotations_count','subscribers_count'));
    }
}
