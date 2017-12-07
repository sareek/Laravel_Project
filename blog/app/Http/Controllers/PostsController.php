<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    
    //
    public function __construct(){
    	$this->middleware('auth')->except(['index','show']);
    }

    public function index(){
    	//$posts=Post::latest()->get();
        $posts=Post::latest();
        if ($month=request('month')){
        	$posts->whereMonth('created_at',Carbon::parse($month)->month);
        }   
        if ($year=request('year')){
        	$posts->whereYear('created_at',$year);
        }  
        $posts=$posts->get();  

         //$archives = Post::archives();
          //return $archives;

    	return view('posts.index', compact('posts'));  //add archives here if archives is passed from here
    }

public function show($id){
	
	 $post=Post::find($id);
	 

    	return view('posts.show', compact('post'));

	
}
public function create(){
	return view('posts.create');
}
public function store(){
	// dd(request()->all());
	//create a new post using request data
	//save it to a database
	//and then redirect to the home page
	// $post=new Post;
	// $post->title=request('title');
	// $post->body=request('body');
 //    $post->save();
	$this->validate(request(),[
        'title'=>'required',
        'body'=>'required'
		]);

                                                   auth()->user()->publish(
	                                              new Post(request(['title','body']))    //and go to user.php and make function publish a                                          and copy these left hand side post::create c                                           code or just type $this->posts->s                                           save($post); dont forget to write a                                           argument Post $post in this case //ref a                                         associating wid user part 2 video laracast 1                                           15:25 time in the video
	                                                 //  
	                                                  );




    	$post=new Post;  
	// Post::create([                                  
 //        'title'=>request('title'),                
 //        'body'=>request('body'),
 //        'user_id' =>auth()->user()->id
	// 	]); 

    return redirect('/');
}
}
