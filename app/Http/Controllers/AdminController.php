<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    return view('admin.tours');
    }
 public function create(){

 }
 
    public function search(Request $request){
    	if($request->query('search')){
    		dd($request->query('search'));
    	}
 
    }
}
