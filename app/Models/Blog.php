<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    public function blog_categories(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
