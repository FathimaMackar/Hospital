<?php

namespace App\Http\Controllers;
use App\users;

use Illuminate\Http\Request;

class departmentview extends Controller
{
 public function index(){

    	$user = users::all()->pluck('user_name','user_email','user_phone','user_id');

    	return view('abc',compact('user'));

    } 

}
