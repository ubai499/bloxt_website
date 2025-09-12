<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
