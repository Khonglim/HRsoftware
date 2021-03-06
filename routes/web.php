<?php

use App\Http\Controllers\PDFController;
use App\Testmbti;
use App\Testdisc;
use App\Personal;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Operate_qSup;
use App\Operate_staff;
use App\Operate_sup;

use App\Ngg_employee;
use App\Ngg_company;
use App\Ngg_department;
use App\Ngg_sector;
use App\Ngg_position;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('Email_HR','Email_hrController');
Route::resource('Email_send','Email_sendController');
Route::resource('employee','EmployeeController');

Route::get('/ngg_work', 'EmployeeController@index')->middleware('auth');


Route::resource('reset_staff','Reset_staff_operController');

Route::resource('reset_sup','Reset_sup_operController');

Route::resource('manpower','ManpowerController');

Route::get('manpower', 'ManpowerController@index')->middleware('auth');



Route::get('/manpowercreate', function () 
{
    return view('Manpower.manpower');

});

Route::get('savepower', function () 
{
    return view('Manpower.save_manpower');

});

Route::post('Email_send_oper','Email_operateController@email_send');

Route::get('send1/{id}','Info_operateController@affiliation1');
Route::get('send2/{id}','Info_operateController@affiliation2');
Route::get('send3/{id}','Info_operateController@manager');
Route::get('send4/{id}','Info_operateController@personnel_manager');
Route::get('send5/{id}','Info_operateController@handler');









Route::resource('rate','InterviewController');
Route::resource('rate_sup','Interview_supController');
Route::resource('disctest','DisctestController');
Route::resource('con_all', 'Con_allController');
Route::resource('Operate', 'OperateController');
Route::resource('Operate_sup', 'Operate_supController');
Route::resource('Operate_staff', 'Operate_staffController');
Route::resource('reset', 'ResetController');
Route::resource('mbti','TestmbtiController');
Route::post('/start','AnswerController@start');
Route::post('/endtest','AnswerController@answer');


Route::resource('disc','TestdiscController');
Route::post('/testdisc','AnswerController@startdisc');
Route::post('/ansdisc','AnswerController@answerdisc');

Route::resource('evatesting','EvatestingController');
Route::post('istestertotest','Evatesting2Controller@test');
Route::post('starttest','Evatesting2Controller@test2');
Route::get('evareport/{id}/report','Evatesting2Controller@test3');
Route::get('summeva','Evatesting2Controller@test4');
Route::get('evareport/{id}/evareportblindname','Evatesting2Controller@test5');

Route::resource('evatestingv2','Evatestingv2Controller');
Route::get('istestertotestv2/{id}','Evatesting2v2Controller@test')->middleware('auth');
Route::get('istestertotestv2/starttestv2/{id}','Evatesting2v2Controller@test2')->middleware('auth');
Route::get('summevav2','Evatesting2v2Controller@test4')->middleware('auth');

Route::get('evareportv2/{id}/reportv2_leader','Evatesting2v2Controller@test3leader')->middleware('auth');
Route::get('evareportv2/{id}/evareportblindnamev2_leader','Evatesting2v2Controller@test5leader')->middleware('auth');
Route::get('evareportv2/{id}/print_report_leader','EvareportController@report_leader')->middleware('auth');
Route::get('evareportv2/{id}/print_blind_report_leader','EvareportController@blind_report_leader')->middleware('auth');

Route::get('evareportv2/{id}/reportv2_officer','Evatesting2v2Controller@test3officer')->middleware('auth');
Route::get('evareportv2/{id}/evareportblindnamev2_officer','Evatesting2v2Controller@test5officer')->middleware('auth');
Route::get('evareportv2/{id}/print_report_officer','EvareportController@test3leader')->middleware('auth');
Route::get('evareportv2/{id}/print_blind_report_officer','EvareportController@test5leader')->middleware('auth');

Route::get('evareportv2/{id}/reportv2_manager','Evatesting2v2Controller@test3manager')->middleware('auth');
Route::get('evareportv2/{id}/evareportblindnamev2_manager','Evatesting2v2Controller@test5manager')->middleware('auth');
Route::get('evareportv2/{id}/print_report_manager','EvareportController@test3leader')->middleware('auth');
Route::get('evareportv2/{id}/print_blind_report_manager','EvareportController@test5leader')->middleware('auth');

Route::resource('/companysmanage', 'CompanyController')->middleware('auth');

Route::get('evatestversion','Evatesting2v2Controller@index')->middleware('auth');

Route::resource('management','EvamanagementController');

Route::get('officer_or_manager','Management2Controller@index')->middleware('auth');

Route::get('exportExcel','EvareportController@Sum_eva')->middleware('auth');

Route::resource('storeExcel','Sum_of_EvaController');

Route::resource('timeattendant','TimeattendantController');

Route::resource('nggemployee','NggemployeeController');

Route::resource('departmentsmanage','DepartmentController');
Route::resource('positionsmanage','PositionController');
Route::resource('sectorsmanage','SectorController');
Route::resource('levelsmanage','LevelController');

Auth::routes();
Route::get('/', function () 
{
    return view('wellcome');

});

Route::get('/userlogin', function () 
{
    return view('auth.userlogin');

});


Route::resource('home','HomeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/saveep', 'EmployeeController@index')->name('saveep');
Route::get('/dynamicdependent','DynamicDependent@index');
Route::get('states/get/{id}','DynamicDependent@getStates');
Route::get('states2/get/{id}','DynamicDependent@getStates');

Route::get('/pdfemployee/{id}','PDFController@pdfemployee' )->middleware('auth');
Route::get('/pdftestdisc/{id}','PDFController@pdftestdisc' )->middleware('auth');
Route::get('/pdftestmbti/{id}','PDFController@pdftestmbti' )->middleware('auth');
Route::get('/pdfcon_all/{id}','PDFController@pdfconall' )->middleware('auth');


Route::get('/pdfcon_staf/{id}','PDFController@pdfoper_staff' )->middleware('auth');

Route::get('/pdfcon_sup/{id}','PDFController@pdfoper_sup' )->middleware('auth');



Route::get('summbti', function () {
    
    $testmbti =  Testmbti::all();
    $data = array(
        'testmbti' => $testmbti
    );
    return view("summary/summbti",$data);

})->middleware('auth');
Route::get('sumdisc', function () {
    
    $testdisc =  Testdisc::all();
    $data = array(
        'testdisc' => $testdisc
    );
    return view("summary/sumdisc",$data);

})->middleware('auth');

Route::get('rate', function () {return view("rate/forminterview");});


Route::get('form', function () {return view("formregister");});


Route::get('interview', function () { return view("rate/index");})->middleware('auth');


Route::get('save', function () { 
    
    return view("rate/save");

});

Route::get('testto', function () { 
    
    return view("testmbti/index");

});

Route::get('testtoo', function () { 
    
    return view("testdisc/index");
});

Route::get('savembti', function () { 
    return view("testmbti/save");
});

Route::get('savedisc', function () { 
    return view("testdisc/save");

});


Route::get('save_employ', function () { 
    
    return view("employ/save");

});






Route::get('operate_employf', function () { 
    
   
    $employee  = DB::table('ngg_employee')
            ->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
            ->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
            ->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
            ->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
            ->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
            ->where('nem_enable','=', 1)
            ->get();
    $data = array(
        'employee' => $employee 
    ); 
    return view("operate/staff/index",$data);
    
  

});


Route::post('operate_employstaff', function () { 
    
   
    $operate_Chioce  = Operate_Chioce::all();
    $operate_qSeff  = Operate_qSeff::all();
    $data = array(
        'operate_Chioce' =>  $operate_Chioce,
        'operate_qSeff' =>   $operate_qSeff,
       
    );
    
    return view("operate/staff/operate_60",$data);

});



Route::post('operate_employsup', function () { 
    
    $manager = DB::table('__manager')->get();
    $operate_Chioce  = Operate_Chioce::all();
    $operate_qSup  = operate_qSup::all();
    $data = array(
        'operate_Chioce' =>  $operate_Chioce,
        'operate_qSup' =>   $operate_qSup,
        'manager' =>   $manager,
    );
    return view("operate/sup/operate_60",$data);

});



Route::get('operate_report*', function () { 


    $employee = DB::table('ngg_employee')
->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
->where('nem_enable', '=', 1)
->where('degree', '=', 0)
->get();
    $operate_staff   =       Operate_staff::all();
    $data = array(
        'employee' => $employee ,
        'operate_staff' =>  $operate_staff
    ); 
    return view("operate/staff/show",$data);

})->middleware('auth');





Route::get('operate_report**', function () { 


$employee = DB::table('ngg_employee')
->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
->where('nem_enable', '=', 1)
->where('degree', '=', 1)
->get();






    $operate_sup   =       Operate_sup::all();


    $data = array(
        'employee' => $employee ,
        'operate_sup' => $operate_sup
    ); 

    return view("operate/sup/show",$data);

})->middleware('auth');









Route::post('conduct_employs', function () { 
    
    $employee  = DB::table('ngg_employee')
            ->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
            ->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
            ->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
            ->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
            ->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
            ->get();
    $operate_staff   =       Operate_staff::all();
    $operate_sup   =       Operate_sup::all();
        $data = array(
            'employee' => $employee ,
            'operate_staff' =>  $operate_staff,
            'operate_sup' =>  $operate_sup
        ); 
   
        return view("operate/staff/conduct_staff",$data);




});




Route::get('setting', function () { 
    $employee  = Personal::where('enable','=', 1  )->get();
   
    $data = array(
        'employee' => $employee ,
       
    ); 
    return view("setting/reset",$data);

})->middleware('auth');

Route::get('narathorn',function(){
   
         $employeetotest1 = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('formfor', 'employeetotest.nee_id_form', '=', 'formfor.id')
            ->where('nee_enable', '=', 1)
            ->where('nem_enable', '=', 1)
            ->get();

        

            $time_at = DB::table('ngg_empolyee_timeattendant')
            ->leftJoin('ngg_employee', 'ngg_empolyee_timeattendant.net_employee_id', '=', 'ngg_employee.nem_id')
            ->where('net_enable', '=', 1)
            ->get();   
     // $ngg_evaluate_results1 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 9)->get();
     // $ngg_evaluate_results2 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 59)->get();
     // $ngg_evaluate_results3 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 26)->get();
      //$ngg_evaluate_results4 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 47)->get();
     // $ngg_evaluate_results5 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 39)->get();
      //$ngg_evaluate_results6 = DB::table('ngg_evaluate_resultv2')->where('nes_evaluate_employee_id', '=', 49)->get();
     

            dd( $time_at);
            
});

Route::resource('user_setting','User_settingController');






