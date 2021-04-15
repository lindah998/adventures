<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
    if(Auth::user()->hasRole('user')){
    	return view('userdashboard')->with('posts',Post::orderBy('updated_at','DESC')->get()); 
    }
    elseif (Auth::user()->hasRole('employee')) {
    		return view('employeedashboard');
    	}
    elseif (Auth::user()->hasRole('admin')) {
    			return view('admindashboard');
    		}	
    }
    public function show(){
      
    }
    public function booking(){
    	return view('bookings');
    }
    public function profile(){
    	return view('profile');
    }
    public function contactus(){
        return view('contact_us');
    }
    public function aboutus(){
        return view('about_us');
    }
    public function create(){
        
    }
}
