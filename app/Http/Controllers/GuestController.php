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

    public function contact_submit(Request $request){
        {
        $first_name   = htmlspecialchars($request->input('first_name'));
        $last_name    = htmlspecialchars($request->input('last_name'));
        $email   = htmlspecialchars($request->input('email'));
        $message = htmlspecialchars($request->input('message'));
        $phone = htmlspecialchars($request->input('phone'));
        $country = htmlspecialchars($request->input('country'));

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ahsan@bloxtecosolutions.co.uk';
            $mail->Password = 'Ahsan_123!!';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('ahsan@bloxtecosolutions.co.uk', 'Contact Form');
            $mail->addAddress('info@bloxttechnologies.com');

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = "<strong>Name:</strong> {$first_name} {$last_name}<br>
                           <strong>Email:</strong> {$email}<br>
                           <strong>Phone:</strong> {$phone}<br>
                           <strong>Country:</strong> {$country}<br>
                           <strong>Message:</strong><br>{$message}";

            $mail->send();
            return response()->json(['success'=>'Thank you! Your message has been sent.']);

        } catch (Exception $e) {

            return back()->with('error', 'Message could not be sent. Error: ' . $mail->ErrorInfo);
        }
    }
    }

    public function about_us()
    {
        $data = [
            'page_title' => "About Bloxt Ltd | Boiler Installation & Renewables Liverpool",
            'page_description' => "About Bloxt Ltd: Family-run company in Liverpool delivering boiler installs, ECO heating, and green energy solutions with trusted expertise",
            'page_keywords' => "about Bloxt Technologies, company profile, IT solutions, app development, web development",
        ];
        return view('about',$data);
    }

    public function blog()
    {
        return view('blogs');
    }

    public function service()
    {
        return view('service');
    }

    public function products()
    {
        return view('products');
    }
    public function product_details()
    {
        return view('product_detail');
    }

    public function faqs()
    {
        $data = [
            'page_title' => "FAQs | Bloxt Boiler Services & Repairs Liverpool",
            'page_description' => "Find answers to common boiler questions. From servicing to emergency repairs, Bloxt Ltd offers expert boiler care in Liverpool",
            'page_keywords' => "about Bloxt Technologies, company profile, IT solutions, app development, web development",
        ];
        return view('faqs',$data);
    }
    public function quote_boiler()
    {
        return view('quote_boiler');
    }


    public function blog_details(){
        return view('blog_detail');
    }

}
