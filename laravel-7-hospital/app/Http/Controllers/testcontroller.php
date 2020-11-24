<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testcontroller extends Controller
{
    
    public function index ()
    {
    	return view('employeedata');

    }


public function getUsers($id = 0){

     if($id==0){ 
        $users = users::orderby('user_id','asc')->select('*')->get(); 
     }else{   
        $users = users::select('*')->where('user_id', $id)->get(); 
     }
     // Fetch all records
     $userData['data'] = $users;

     echo json_encode($userData);
     exit;
  }


}

