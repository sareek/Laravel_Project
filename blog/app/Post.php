<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','body','user_id']; 

    public function comments(){

    	return $this->hasMany(Comment::class);
    }
    



public function user(){

    	return $this->belongsTo(User::class);
    }


    public function addComment($body){
      $this->comments()->create(compact('body'));

     // Comment::create([
     // 	'body'=>$body,
     // 	'post_id'=>$this->id

   // ]);
 }
 public static function archives(){
    return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) published')
         ->groupBy('year', 'month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();

 }


}

