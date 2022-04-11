<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setPostImageAttribute($value){
        $this->attributes['post_image'] = asset($value);
    }

    public function getPostImageAttribute($value){
        $path = 'storage/app/'.$value;
        return asset($value);
    }
}