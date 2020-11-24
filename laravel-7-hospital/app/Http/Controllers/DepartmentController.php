<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class departmentcontroller extends Controller
{
	  public function index(){
$data = DB::select("SELECT * FROM viewapppointments INNER JOIN appointments ON viewapppointments.appointment_id=appointments.appointment_id
INNER JOIN users ON appointments.user_id =users.user_id WHERE viewapppointments.doctor_id='0002' AND appointments.appointment_date='22-11-2020'");
return view('abc',['data'=>$data]);
}

}
