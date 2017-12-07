<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['post_id','title','body','user_id']; 
     public function post(){

    	return $this->belongstTo(Post::class);
    }
public function user(){

    	return $this->belongstTo(User::class);
    }

}
