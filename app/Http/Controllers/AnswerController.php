<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        return view('start' );
    }
    public function start()
    {
        $choice = DB::connection('mysql2')->select("SELECT * FROM tb_choice");
        $data = array( 'choice' =>  $choice);
        
        return view('test',$data);
    }
    public function answer()
    {
      
        
        return view('ans');
    }
}
