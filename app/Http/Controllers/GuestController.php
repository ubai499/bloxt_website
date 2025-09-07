<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class GuestController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blogs');
    }

    public function service()
    {
        return view('service');
    }
}
