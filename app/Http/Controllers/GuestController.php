<?php

namespace App\Http\Controllers;

use App\Mail\CustomEmail;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Quotes;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Session;

class GuestController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('index', compact('blogs'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function quote_boiler_store(Request $request)
    {
        $validated = $request->validate([
            'current_boiler_type' => 'required|string',
            'convert_to_combi' => 'nullable|string',
        ]);

        $boilerType = $validated['current_boiler_type'];
        $converttocombi = $validated['convert_to_combi'] ?? null;

        // Check if we should show only Combi Boilers
        if ($boilerType === 'Combi Boiler' || $converttocombi === 'Yes') {
            $products = Product::where('product_type', 'Combi Boiler')->get();
        } else {
            $products = Product::where('product_type', $boilerType)->get();
        }

        // Store form data in session for later use
        Session::put('quote_data', $request->all());

        $formData = $request->all();
        return view('relevant-products', compact('products', 'formData'));
    }

    public function store_financing(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email|max:255',
            'product_id' => 'required|exists:products,id',
        ]);

        // Get the quote data from session
        $quoteData = Session::get('quote_data', []);

        // Get product details
        $product = Product::find($validated['product_id']);

        // Create quote record
        $quote = Quotes::create([
            // Customer info
            'full_name' => $validated['full_name'],
            'address' => $validated['address'],
            'email' => $validated['email'],

            // Quote data from session
            'zip_code' => $quoteData['zip_code'] ?? null,
            'ownership' => $quoteData['ownership'] ?? null,
            'home_type' => $quoteData['home_type'] ?? null,
            'flat_floor' => $quoteData['flat_floor'] ?? null,
            'bungalow_floors' => $quoteData['bungalow_floors'] ?? null,
            'bedrooms' => $quoteData['bedrooms'] ?? null,
            'bathtubs' => $quoteData['bathtubs'] ?? null,
            'separate_showers' => $quoteData['separate_showers'] ?? null,
            'radiators' => $quoteData['radiators'] ?? null,
            'fuel_type' => $quoteData['fuel_type'] ?? null,
            'current_boiler_type' => $quoteData['current_boiler_type'] ?? null,
            'convert_to_combi' => $quoteData['convert_to_combi'] ?? null,
            'boiler_condition' => $quoteData['boiler_condition'] ?? null,
            'boiler_mounting' => $quoteData['boiler_mounting'] ?? null,
            'boiler_age' => $quoteData['boiler_age'] ?? null,
            'current_boiler_location' => $quoteData['current_boiler_location'] ?? null,
            'stay_duration' => $quoteData['stay_duration'] ?? null,
            'relocate_boiler' => $quoteData['relocate_boiler'] ?? null,
            'new_boiler_location' => $quoteData['new_boiler_location'] ?? null,
            'accept_access_charges' => $quoteData['accept_access_charges'] ?? null,
            'trvs' => $quoteData['trvs'] ?? null,
            'water_meter' => $quoteData['water_meter'] ?? null,
            'flue_location' => $quoteData['flue_location'] ?? null,
            'roof_type' => $quoteData['roof_type'] ?? null,
            'roof_position' => $quoteData['roof_position'] ?? null,
            'wall_distance' => $quoteData['wall_distance'] ?? null,
            'flue_ground_height' => $quoteData['flue_ground_height'] ?? null,
            'flue_property_distance' => $quoteData['flue_property_distance'] ?? null,
            'flue_under_structure' => $quoteData['flue_under_structure'] ?? null,
            'flue_door_window_distance' => $quoteData['flue_door_window_distance'] ?? null,

            // Product info
            'product_id' => $validated['product_id'],
            'product_price' => $product->price,

            // Transaction type
            'transaction_type' => 'financing',
            'status' => 'pending',
        ]);

        try {

            $customerMessage = "
        <p>Dear {$validated['full_name']},</p>

        <p>Thank you for applying for financing with <strong>Bloxt</strong>.</p>

        <p>We have successfully received your application. One of our team members
        will be in touch with you shortly to discuss the next steps.</p>

        <p>If you have any questions in the meantime, feel free to reply to this email.</p>

        <p>Kind regards,<br>
        <strong>The Bloxt Team</strong></p>
    ";

            Mail::to($validated['email'])->send(new CustomEmail(
                [
                    'subject' => 'Your Bloxt Financing Application',
                    'message' => $customerMessage,
                ],
                'Your Bloxt Financing Application'
            ));

            // =========================
            // Internal notification email
            // =========================
            $internalMessage = "
        <p>A new <strong>Financing Application</strong> has been submitted.</p>

        <p><strong>Applicant Name:</strong> {$validated['full_name']}<br>
        <strong>Email:</strong> {$validated['email']}<br>
        <strong>Address:</strong> {$validated['address']}<br>
        <strong>Post Code:</strong> {$quoteData['zip_code']}<br>
        <strong>Owner Type:</strong> {$quoteData['ownership']}<br>
        <strong>Home Type:</strong> {$quoteData['home_type']}<br>
        <strong>Current Boiler Type:</strong> {$quoteData['current_boiler_type']}<br>
        <strong>Current Boiler Condition:</strong> {$quoteData['boiler_condition']}<br>
        <strong>Convert to Combi Boiler? </strong> {$quoteData['convert_to_combi']}<br>
        <strong>Product:</strong> {$product->title}<br>

        <p>Please log in to the Bloxt portal to view the full application details.</p>
    ";

            Mail::to('info@bloxt.co.uk')->send(new CustomEmail(
                [
                    'subject' => 'New Financing Application Submitted',
                    'message' => $internalMessage,
                ],
                'New Financing Application Submitted'
            ));

            return response()->json([
                'success' => true,
                'message' => 'Financing application submitted successfully',
                'quote_id' => $quote->id,
            ]);


        } catch (Exception $e) {

            return back()->with('error', 'Message could not be sent.');
        }


    }

    public function store_checkout(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email|max:255',
            'product_id' => 'required|exists:products,id',
        ]);

        // Get the quote data from session
        $quoteData = Session::get('quote_data', []);

        // Get product details
        $product = Product::find($validated['product_id']);
        $productPrice = is_string($product->price)
            ? floatval(str_replace(',', '', $product->price))
            : floatval($product->price);
        // Create quote record
        $quote = Quotes::create([
            // Customer info
            'full_name' => $validated['full_name'],
            'address' => $validated['address'],
            'email' => $validated['email'],

            // Quote data from session (same as financing)
            'zip_code' => $quoteData['zip_code'] ?? null,
            'ownership' => $quoteData['ownership'] ?? null,
            'home_type' => $quoteData['home_type'] ?? null,
            'flat_floor' => $quoteData['flat_floor'] ?? null,
            'bungalow_floors' => $quoteData['bungalow_floors'] ?? null,
            'bedrooms' => $quoteData['bedrooms'] ?? null,
            'bathtubs' => $quoteData['bathtubs'] ?? null,
            'separate_showers' => $quoteData['separate_showers'] ?? null,
            'radiators' => $quoteData['radiators'] ?? null,
            'fuel_type' => $quoteData['fuel_type'] ?? null,
            'current_boiler_type' => $quoteData['current_boiler_type'] ?? null,
            'convert_to_combi' => $quoteData['convert_to_combi'] ?? null,
            'boiler_condition' => $quoteData['boiler_condition'] ?? null,
            'boiler_mounting' => $quoteData['boiler_mounting'] ?? null,
            'boiler_age' => $quoteData['boiler_age'] ?? null,
            'current_boiler_location' => $quoteData['current_boiler_location'] ?? null,
            'stay_duration' => $quoteData['stay_duration'] ?? null,
            'relocate_boiler' => $quoteData['relocate_boiler'] ?? null,
            'new_boiler_location' => $quoteData['new_boiler_location'] ?? null,
            'accept_access_charges' => $quoteData['accept_access_charges'] ?? null,
            'trvs' => $quoteData['trvs'] ?? null,
            'water_meter' => $quoteData['water_meter'] ?? null,
            'flue_location' => $quoteData['flue_location'] ?? null,
            'roof_type' => $quoteData['roof_type'] ?? null,
            'roof_position' => $quoteData['roof_position'] ?? null,
            'wall_distance' => $quoteData['wall_distance'] ?? null,
            'flue_ground_height' => $quoteData['flue_ground_height'] ?? null,
            'flue_property_distance' => $quoteData['flue_property_distance'] ?? null,
            'flue_under_structure' => $quoteData['flue_under_structure'] ?? null,
            'flue_door_window_distance' => $quoteData['flue_door_window_distance'] ?? null,

            // Product info
            'product_id' => $validated['product_id'],
            'product_price' => $request->finalprice,

            // Transaction type
            'transaction_type' => 'checkout',
            'status' => 'pending',
            'payment_status' => 'pending',
        ]);

        // Initialize Stripe
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        try {
            // Create Stripe Checkout Session
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'gbp',
                            'product_data' => [
                                'name' => $product->title,
                                'description' => strip_tags($product->description),
                                'images' => [asset($product->image ?? 'assets/upload/default-boiler.png')],
                            ],
                            'unit_amount' => $request->finalprice * 100, // Stripe expects amount in pence
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}&quote_id=' . $quote->id,
                'cancel_url' => route('checkout.cancel') . '?quote_id=' . $quote->id,
                'customer_email' => $validated['email'],
                'metadata' => [
                    'quote_id' => $quote->id,
                    'product_id' => $product->id,
                ],
            ]);

            // Store the Stripe session ID in the quote
            $quote->update([
                'stripe_session_id' => $session->id,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Redirecting to payment...',
                'stripe_url' => $session->url,
                'quote_id' => $quote->id,
            ]);

        } catch (\Exception $e) {
            // Delete the quote if Stripe session creation fails
            $quote->delete();

            return response()->json([
                'success' => false,
                'message' => 'Failed to initiate payment: ' . $e->getMessage(),
            ], 500);
        }
    }

    // Success callback after Stripe payment
    public function checkoutSuccess(Request $request)
    {
        $sessionId = $request->get('session_id');
        $quoteId = $request->get('quote_id');

        if (!$sessionId || !$quoteId) {
            return redirect()->route('products')->with('error', 'Invalid payment session');
        }

        try {
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

            // Retrieve the session from Stripe
            $session = \Stripe\Checkout\Session::retrieve($sessionId);

            if ($session->payment_status === 'paid') {
                // Update quote status
                $quote = Quotes::find($quoteId);
                $product = Product::find($quote->product_id);
                if ($quote) {
                    $quote->update([
                        'status' => 'completed',
                        'payment_status' => 'paid',
                        'stripe_payment_intent' => $session->payment_intent,
                    ]);
                }

                $customerMessage = "
        <p>Dear {$quote->full_name},</p>

        <p>Thank you for your purchase with <strong>Bloxt</strong>.</p>

        <p>Your payment has been received successfully, and your order is now confirmed.</p>

        <p><strong>Order Details:</strong><br>
        Product: {$product->title}<br>
        Amount Paid: £" . number_format($quote->product_price, 2) . "<br>
        Order Reference: {$quote->id}</p>

        <p>Our team will be in touch shortly to arrange the next steps.</p>

        <p>Kind regards,<br>
        <strong>The Bloxt Team</strong></p>
    ";

                Mail::to($quote->email)->send(new CustomEmail(
                    [
                        'subject' => 'Payment Successful – Your Bloxt Order',
                        'message' => $customerMessage,
                    ],
                    'Payment Successful – Your Bloxt Order'
                ));

                // =========================
                // Internal notification email
                // =========================
                $internalMessage = "
        <p>A new <strong>Checkout Order</strong> has been completed.</p>

        <p>
        <strong>Customer Name:</strong> {$quote->full_name}<br>
        <strong>Email:</strong> {$quote->email}<br>
        <strong>Address:</strong> {$quote->address}<br>
        <strong>Postcode:</strong> {$quote->zip_code}<br>
                <strong>Owner Type:</strong> {$quote->ownership}<br>
        <strong>Home Type:</strong> {$quote->home_type}<br>
        <strong>Current Boiler Type:</strong> {$quote->current_boiler_type}<br>
        <strong>Current Boiler Condition:</strong> {$quote->boiler_condition}<br>
        <strong>Convert to Combi Boiler? </strong> {$quote->convert_to_combi}<br>
        <strong>Product:</strong> {$product->title}<br>
        <strong>Amount Paid:</strong> £" . number_format($quote->product_price, 2) . "<br>
        <strong>Quote ID:</strong> {$quote->id}
        </p>

        <p>Please log in to the Bloxt portal to view full order details.</p>
    ";

                Mail::to('info@bloxt.co.uk')->send(new CustomEmail(
                    [
                        'subject' => 'New Paid Order – Bloxt Checkout',
                        'message' => $internalMessage,
                    ],
                    'New Paid Order – Bloxt Checkout'
                ));

                return view('checkout-success', ['quote' => $quote]);
            } else {
                return redirect()->route('products')->with('error', 'Payment was not successful');
            }

        } catch (\Exception $e) {
            return redirect()->route('products')->with('error', 'Error verifying payment: ' . $e->getMessage());
        }
    }

    // Cancel callback
    public function checkoutCancel(Request $request)
    {
        $quoteId = $request->get('quote_id');

        if ($quoteId) {
            $quote = Quotes::find($quoteId);
            if ($quote) {
                $quote->update([
                    'status' => 'cancelled',
                    'payment_status' => 'cancelled',
                ]);
            }
        }

        return view('checkout-cancel');
    }

    public function contact_submit(Request $request)
    { {
            $first_name = htmlspecialchars($request->input('first_name'));
            $last_name = htmlspecialchars($request->input('last_name'));
            $email = htmlspecialchars($request->input('email'));
            $message = htmlspecialchars($request->input('message'));
            $phone = htmlspecialchars($request->input('phone'));
            $service = htmlspecialchars($request->input('service'));

            try {

                $message = "
                <strong>Name:</strong> {$first_name} {$last_name}<br>
                           <strong>Email:</strong> {$email}<br>
                           <strong>Phone:</strong> {$phone}<br>
                           <strong>Service Required:</strong> {$service}<br>
                           <strong>Message:</strong><br>{$message}
                ";
                Mail::to("info@bloxt.co.uk")->send(new CustomEmail(
                    [
                        'subject' => 'New Contact Form Submission',
                        'message' => $message,
                    ],
                    'New Contact Form Submission.'
                ));
                return redirect()->back()->with('success', 'Your Message Has Been Sent');


            } catch (Exception $e) {

                return back()->with('error', 'Message could not be sent.');
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
        return view('about', $data);
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
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function product_details($id)
    {
        $product = Product::findOrFail($id);
        return view('product_detail', compact('product'));
    }

    public function faqs()
    {
        $data = [
            'page_title' => "FAQs | Bloxt Boiler Services & Repairs Liverpool",
            'page_description' => "Find answers to common boiler questions. From servicing to emergency repairs, Bloxt Ltd offers expert boiler care in Liverpool",
            'page_keywords' => "about Bloxt Technologies, company profile, IT solutions, app development, web development",
        ];
        return view('faqs', $data);
    }
    public function quote_boiler()
    {
        return view('quote_boiler');
    }


    public function blogDetails($id)
    {
        $blog = Blog::where('id', $id)->firstOrFail();

        return view('blog_detail', compact('blog'));
    }

    public function get_quotation()
    {
        return view('get_quotation');
    }

    public function get_quotation_store(Request $request)
    {
        // Validate and store the quotation data
        $validated = $request->validate([
            'zip_code' => 'required|string|max:10',
        ]);

        // You can process the form data here
        // For now, just return a success message or redirect
        return redirect()->back()->with('success', 'Thank you! Your quotation request has been submitted.');
    }

}
