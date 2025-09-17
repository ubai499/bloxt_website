<?php

namespace App\Models;

use App\Jobs\SendNewItemNotification;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];


    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }


    protected static function booted(): void
    {
        static::created(function (Product $product) {
            // Dispatch to queue so the HTTP request stays fast
            SendNewItemNotification::dispatch($product->id);
        });
    }
}
