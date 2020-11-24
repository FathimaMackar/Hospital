<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userviewcontroller extends Controller
{
    
    public function index(){

    	$userr = users::all()->toArray();
    	return view('staffhome',compact('userr'));

}
}
