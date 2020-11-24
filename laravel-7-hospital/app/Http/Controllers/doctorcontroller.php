<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class doctorcontroller extends Controller
{

    function show ()
    {
    	
    	$data= DB::table('doctors')->get();
    	return view('Frontend.appointment',['data'=>$data]);
    }}
