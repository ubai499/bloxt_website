<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Quotes;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $quotes = Quotes::where('client_id', Auth::id())->get();
        return view('customer.dashboard', compact('quotes'));
    }
}
