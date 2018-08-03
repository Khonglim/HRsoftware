<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Position;
use App\Department;
use App\Employee;
use Illuminate\Support\Facades\DB;
class JorgchartController extends Controller
{
      public function company()
    {
    	$company = Company::all();
        $department= Department::all();
        $position = Position::all();
       
        $data1 = array('company' => $company,'department' => $department,'position' => $position);
        return view('orgchartcompany',$data1);
    }
     
}
