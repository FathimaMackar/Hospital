<?php

namespace App\Http\Controllers;

use App\departments;
use App\doctors;
use Illuminate\Http\Request;


class appointmentcontroller extends Controller
{
    public function index(){

    	$department = departments::all()->pluck('dept_name','dept_id');

    	return view('Frontend.home',compact('department'));

    } 

     public function getdoctor($id){

     	$doctor = doctors::where('dept_id', $id)->pluck('doctor_name','doctor_id');

     	return json_encode($doctor);

    }


    

}
