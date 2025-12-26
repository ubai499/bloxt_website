<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('customer.blogs.index', compact('blogs'));
    }

    public function view($id)
    {
        $blog = Blog::findOrFail($id);
        return view('customer.blogs.blog_view', compact('blog'));
    }
}
