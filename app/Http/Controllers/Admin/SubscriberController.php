<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
class SubscriberController extends Controller
{

    public function subscriber_form(){
        return view('subscriber_form');
    }

    public function store(Request $request)
    {

        $data = $request->validate(['email' => 'required|email:rfc,dns']);
        $token = Str::random(64);

        $subscriber = Subscriber::updateOrCreate(
            ['email' => strtolower($data['email'])],
            ['unsubscribe_token' => $token, 'unsubscribed_at' => null] // re-activate if previously unsubscribed
        );

        // (A) Instant subscribe (no confirm):
        $subscriber->forceFill(['verified_at' => now()])->save();

        // (B) If you want double opt-in:
        // Mail::to($subscriber->email)->queue(new \App\Mail\ConfirmSubscriptionMail($subscriber));

        return back()->with('status', 'Subscribed! You will receive emails when new items are posted.');
    }

    // Only if using double opt-in:
    public function confirm(string $token)
    {
        $subscriber = Subscriber::where('unsubscribe_token', $token)->firstOrFail();
        $subscriber->update(['verified_at' => now(), 'unsubscribed_at' => null]);

        return redirect()->route('subscribe.form')->with('status', 'Subscription confirmed!');
    }



    public function unsubscribe(string $token)
    {
        $subscriber = Subscriber::where('unsubscribe_token', $token)->firstOrFail();
        $subscriber->update(['unsubscribed_at' => now()]);
        return response('You have been unsubscribed.', 200);
    }
}
