<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

public function index(){


	$posts = Post::all();

return view( 'welcome',  compact('posts'));
}



public function about(){


	return view('about' );
}


public function contact(){

	return view('contact');
}

public function contactPost(Request $request){



	if($request->hasFile('attachment')){
		$file = $request->file('attachment');
		echo $file->getClientOriginalName();

		$file->move('images', $file->getClientOriginalName());

	} 

	$email= $request ['email'];

	var_dump($email);


}
}