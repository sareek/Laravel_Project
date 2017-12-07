<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Post;
 

class SessionController extends Controller
{
   public function __construct(){
   	$this->middleware('guest',['except'=>'destroy']);
   }

    public function create(){
    	
          //return $archives;

    	return view('sessions.create');
    	
    
    }
    public function destroy(){
    	auth()->logout();
    	return redirect('/');
    }
    public function store(){
    	                                                                     //attempt to authenticate the user
    	if(! auth()->attempt(request(['email','password']))){
    		return back()->withErrors([
    		'message'=>'please check again'
             ]);                                      //if not redirect back
    	}
    	return redirect()->home();
    	//if so sign them in
    	//redirect to the homepage 
    }
}
