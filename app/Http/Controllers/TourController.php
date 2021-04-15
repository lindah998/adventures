<?php

namespace App\Http\Controllers;
use App\Models\Tour;

use Illuminate\Http\Request;

class TourController extends Controller
{
public function create(Request $request){
 Tour::create([
 	'user_id'=>auth()->user()->id,
 	'county'=>$request->input('county'),
 	'date'=>$request->input('date'),
 	'duration'=>$request->input('duration'),
 	'hotels'=>$request->input('hotels'),
 	'amount'=>$request->input('amount')
 ]);
 return redirect('dashboard');
	}
}