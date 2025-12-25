<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Quotes;
use Auth;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = Quotes::where('client_id', Auth::id())->get();
        return view('customer.quotes.index', compact('quotes'));
    }

    public function quote_details($id)
    {
       $quote = Quotes::with('product')->findOrFail($id);
        return view('admin.quotes.quote_details', compact('quote'));
    }
}
