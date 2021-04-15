<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
    	return view('create');
    }
    public function create(Request $request){

    	$request->validate([
    		'title'=>'required',
    		'caption'=>'required',
    		'image'=>'required|mimes:png,jpg,jpeg|max:2048',
    	]);
    	$imageName=uniqid().'-'.$request->image->extension();
    	$request->image->move(public_path('images'),$imageName);
    	Post::create([
    		'user_id'=>auth()->user()->id,
    		'title'=>$request->input('title'),
    		'caption'=>$request->input('caption'),
    		'image'=>$imageName
    		
    	]);
    	return redirect('dashboard');
    }
}
