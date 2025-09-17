<?php

namespace App\Jobs;

use App\Mail\NewItemMail;
use App\Models\Product;
use App\Models\Subscriber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewItemNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $productId;

    /**
     * Optionally control retries/backoff.
     */
    public $tries = 3;
    public $backoff = 30; // seconds

    public function __construct(int $productId)
    {
        $this->productId = $productId;
    }

    public function handle(): void
    {
        $product = Product::find($this->productId);
        if (!$product) return;

        // Only active & verified subscribers
        Subscriber::whereNull('unsubscribed_at')
            ->whereNotNull('verified_at')
            ->orderBy('id')
            ->chunk(500, function ($subs) use ($product) {
                foreach ($subs as $sub) {
                    Mail::to($sub->email)->queue(new NewItemMail($product, $sub));
                }
            });
    }
}
