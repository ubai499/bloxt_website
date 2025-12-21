<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = Quotes::all();
        return view('admin.quotes.index', compact('quotes'));
    }

    public function quote_details($id)
    {
       $quote = Quotes::with('product')->findOrFail($id);
        return view('admin.quotes.quote_details', compact('quote'));
    }
}
