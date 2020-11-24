<?php

namespace App\Http\Controllers;

use App\departments;
use App\doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class staffcontroller extends Controller
{
    public function index(){

    	$department = departments::all()->pluck('dept_name','dept_id');

    	return view('Frontend.staffhome1',compact('department'));

    } 

     public function getdoctor($id){

     	$doctor = doctors::where('dept_id', $id)->pluck('doctor_name','doctor_id');

     	return json_encode($doctor);

    }

    public function view(){
$data = users::all()->pluck('user_name','user_email','user_phone','user_id');
	return view('Frontend.staffhome1',compact('data'));
}
}
