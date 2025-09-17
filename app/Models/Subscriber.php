<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['email','unsubscribe_token','verified_at','unsubscribed_at'];
    protected $casts = [
        'verified_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];
}
