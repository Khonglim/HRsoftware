<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Partof;
use App\Formfor;
use App\Question;
use App\Resulteva;
use App\Resulteva2;
use App\Resulteva3;
use App\Ngg_employee;
use App\Employeetotest;
use App\Ngg_evaluate_result;
use Illuminate\Support\Facades\Input;


class Evatesting2Controller extends Controller
{
       public function test()
    {
        $employeetotest = Employeetotest::all();
        $formfor = Formfor::all();
        $ngg_employee = Ngg_employee::all();

         $data = array(
            'employeetotest' => $employeetotest ,'formfor' => $formfor,'ngg_employee' => $ngg_employee
        );
         return view("testeva/istestertotest",$data);
    }

     public function test2()
    {
         
         $partof = Partof::all();
         $formfor = Formfor::all();
         $question = Question::all();

         $data = array(
            'partof' => $partof ,'formfor' => $formfor ,'question' => $question 
        ); 
        return view("testeva/starttest",$data);
    }
     public function test3($id)
    {
          if($id !== '') {

            
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = Ngg_evaluate_result::all();
            $id = $id/$id;
            $question = DB::table('question')->where('id_form', '=', $id)->get();
            $partof = DB::table('partof')->where('id_form', '=', $id)->get();
            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question 

            );

            return view('testeva/evareport',$data);
        }
        
        
    }
}
