<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Operate_staff;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Ngg_employee;
use DB;


class Operate_staffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operate/staff/operate_60');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request  )
    {
      

        if(Input::get('id_posinal') !== '') {

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper' => 1]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_conduct' => 1]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper_90' => 1]);
            }







        $operateSataff = new Operate_staff;
        $operateSataff->id_posinal= Input::get('id_posinal');
        $operateSataff->id_employ= Input::get('id_employ');
        $operateSataff->position= Input::get('position');
        $operateSataff->department= Input::get('department');
        $operateSataff->degree= Input::get('degree');  ;
        $operateSataff->starttime= Input::get('dateStart2');
        $operateSataff->endtime= Input::get('dateEnd2');
        $operateSataff->number= Input::get('totolDay2');
        $operateSataff->date_60= Input::get('totolDay_60');
        $operateSataff->date_90 = Input::get('totolDay_90');


        $operateSataff->chioce1_60= Input::get('score60_1');
        $operateSataff->chioce2_60= Input::get('score60_2');
        $operateSataff->chioce3_60= Input::get('score60_3');
        $operateSataff->chioce4_60 = Input::get('score60_4');
        $operateSataff->chioce5_60= Input::get('score60_5');
        $operateSataff->chioce6_60 = Input::get('score60_6');
        $operateSataff->chioce7_60 = Input::get('score60_7');
        $operateSataff->chioce8_60= Input::get('score60_8');
        $operateSataff->chioce9_60= Input::get('score60_9');
        $operateSataff->chioce10_60 = Input::get('score60_10');
        $operateSataff->chioce11_60 = Input::get('score60_11');
        $operateSataff->chioce12_60 = Input::get('score60_12');
        $operateSataff->chioce13_60 = Input::get('score60_13');
        $operateSataff->chioce14_60 = Input::get('score60_14');
        $operateSataff->chioce15_60 = Input::get('score60_15');

        $operateSataff->subtotal_60= Input::get('total_60');
        $operateSataff->rate_60= Input::get('rate_60');

        $operateSataff->comments_60 = Input::get('assessor');

        $operateSataff->comments_featured= Input::get('featured');
        $operateSataff->comments_weakness= Input::get('weakness');
        $operateSataff->name_rate_60=   Input::get('namerate_60');




        $operateSataff->startwork_60= Input::get('startrate_60') ;
        $operateSataff->endwork_60 = Input::get('endrate_60');
        $operateSataff->sick_leave_60 = Input::get('sick');
        $operateSataff->errand_leave_60 = Input::get('errand');
        $operateSataff->absence_60 = Input::get('absence');
        $operateSataff->vacation_60= Input::get('vacation');
        $operateSataff->line_terms_60 = Input::get('line');
        $operateSataff->line_min_60 = Input::get('min');
        $operateSataff->signa1_60 = Input::get('signa1_60');
        $operateSataff->NumberDate_60 = Input::get('NumberDate_60');
    


     $operateSataff->save();
     Session::flash('flash_message','สำเร็จ!! ขอบคุณสําหรับการประเมิน');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
            $employee  = Ngg_employee::where('nem_enable','=', 1)->get();
            $manager = DB::table('__manager')->get();
            $operate_staff = Operate_staff::find($id);
            $operate_Chioce  = Operate_Chioce::all();
            $operate_qSeff  = Operate_qSeff::all();

            $data = array(
                'operate_staff' =>  $operate_staff,
                'operate_Chioce'=>  $operate_Chioce,
                'operate_qSeff' =>  $operate_qSeff,
                'employee'      =>  $employee,
                'manager'       =>  $manager
            );
            return view('operate/staff/operate_90',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if(Input::get('idemploy') !== '') {

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper_90' => 1]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_conduct' => 0]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper_90' => 1]);
            }

   
        $operateSataff =  Operate_staff::find($id);

    $operateSataff->chioce1_90= Input::get('score90_1');
    $operateSataff->chioce2_90= Input::get('score90_2');
    $operateSataff->chioce3_90 = Input::get('score90_3');
    $operateSataff->chioce4_90= Input::get('score90_4');
    $operateSataff->chioce5_90 = Input::get('score90_5');
    $operateSataff->chioce6_90= Input::get('score90_6');
    $operateSataff->chioce7_90= Input::get('score90_7');
    $operateSataff->chioce8_90= Input::get('score90_8');
    $operateSataff->chioce9_90= Input::get('score90_9');
    $operateSataff->chioce10_90 = Input::get('score90_10');
    $operateSataff->chioce11_90 = Input::get('score90_11');
    $operateSataff->chioce12_90 = Input::get('score90_12');
    $operateSataff->chioce13_90 = Input::get('score90_13');
    $operateSataff->chioce14_90= Input::get('score90_14');
    $operateSataff->chioce15_90 = Input::get('score90_15');
    $operateSataff->subtotal_90 = Input::get('total_90');
    $operateSataff->rate_90 = Input::get('rate_90');
    $operateSataff->subtotal_final= Input::get('rate_all');
    $operateSataff->comments_90 = Input::get('assessor2');
    $operateSataff->experimental = Input::get('experimental');
    $operateSataff->experimental_date = Input::get('clsdate');
    $operateSataff->full_time_worker= Input::get('full_time_worker');
    $operateSataff->full_time_worker_date= Input::get('dateinto');
    $operateSataff->full_time_worker_position= Input::get('full_time_worker_position');


    $operateSataff->modify= Input::get('modify');
    $operateSataff->modify_position1= Input::get('modify_position1');
    $operateSataff->modify_position2 = Input::get('modify_position2');
    $operateSataff->modify_date = Input::get('"modify_date');


    $operateSataff->other_90= Input::get('other_90');
    $operateSataff->other_com_90 = Input::get('other_com_90');
    $operateSataff->name_rate_90 = Input::get('namerate_90');
    $operateSataff->signa1_90 = Input::get('signa1_90');

    $operateSataff->chioce_suitability1= Input::get('staaff_one1') ;
    $operateSataff->chioce_suitability2 = Input::get('staaff_one2');
    $operateSataff->chioce_suitability3 = Input::get('staaff_one3');
    $operateSataff->chioce_suitability4= Input::get('staaff_one4') ;
    $operateSataff->chioce_suitability5 = Input::get('staaff_one5');
    $operateSataff->chioce_suitability6 = Input::get('staaff_one6');
    $operateSataff->chioce_suitability7= Input::get('staaff_one7');
    $operateSataff->chioce_suitability8= Input::get('staaff_one8');
    $operateSataff->chioce_suitability9 = Input::get('staaff_one9');
    $operateSataff->chioce_suitability10= Input::get('staaff_one10');


    $operateSataff->chioce_suitability11= Input::get('staaff_one50') ;
    $operateSataff->chioce_suitability12 = Input::get('staaff_one51');
    $operateSataff->chioce_suitability13 = Input::get('staaff_one52');
    $operateSataff->chioce_suitability14= Input::get('staaff_one53') ;
    $operateSataff->chioce_suitability15 = Input::get('staaff_one54');
    $operateSataff->chioce_suitability16 = Input::get('staaff_one55');
    $operateSataff->chioce_suitability17= Input::get('staaff_one56');
    $operateSataff->chioce_suitability18= Input::get('staaff_one57');
    $operateSataff->chioce_suitability19 = Input::get('staaff_one58');
    $operateSataff->chioce_suitability20= Input::get('staaff_one59');


    $operateSataff->chioce_suitability21= Input::get('staaff_one100') ;
    $operateSataff->chioce_suitability22 = Input::get('staaff_one101');
    $operateSataff->chioce_suitability23 = Input::get('staaff_one102');
    $operateSataff->chioce_suitability24= Input::get('staaff_one103') ;
    $operateSataff->chioce_suitability25 = Input::get('staaff_one104');
    $operateSataff->chioce_suitability26 = Input::get('staaff_one105');
    $operateSataff->chioce_suitability27= Input::get('staaff_one106');
    $operateSataff->chioce_suitability28= Input::get('staaff_one107');
    $operateSataff->chioce_suitability29 = Input::get('staaff_one108');
    $operateSataff->chioce_suitability30= Input::get('staaff_one109');


    $operateSataff->sum_chioce_suitability10 = Input::get('sum_chioce_suitability10');
    $operateSataff->comment_suitability10 = Input::get('comment_suitability10');
    $operateSataff->ok_suitability = Input::get('ok_suitability');
    $operateSataff->other_suitability = Input::get('other_suitability');


    $operateSataff->other_com_suitability= Input::get('other_com_suitability') ;
    $operateSataff->namerate_suitability= Input::get('namerate_suitability') ;



    $operateSataff->conclusions= Input::get('conclusions') ;
    $operateSataff->results_manager= Input::get('results_manager');




        $operateSataff->human_resource_ok= Input::get('human_resource_ok');

        $operateSataff->human_resource_modi = Input::get('human_resource_modi');
        $operateSataff->human_resource_commo = Input::get('human_resource_commo');

        $operateSataff->human_resource_nodi = Input::get('human_resource_nodi');
        $operateSataff->human_resource_comno = Input::get('human_resource_comno');

        $operateSataff->human_resource_adjust= Input::get('human_resource_adjust') ;
        $operateSataff->human_resource_posi = Input::get('human_resource_posi');

        $operateSataff->human_resource_fail = Input::get('human_resource_fail');
        $operateSataff->human_resource_date = Input::get('human_resource_date');

        $operateSataff->human_resource_other= Input::get('human_resource_other');
      $operateSataff->human_resource_othercom = Input::get('human_resource_othercom');

       $operateSataff->human_resource_nre = Input::get('human_resource_nre');



       $operateSataff->manager_resource_ok = Input::get('manager_resource_ok');

       $operateSataff->manager_resource_modi = Input::get('manager_resource_modi');
       $operateSataff->manager_resource_comdi = Input::get('manager_resource_comdi');

       $operateSataff->manager_resource_nodi = Input::get('manager_resource_nodi');
       $operateSataff->manager_resource_comno	= Input::get('manager_resource_comno') ;

        $operateSataff->manager_resource_adjust = Input::get('manager_resource_adjust');
        $operateSataff->manager_resource_posi = Input::get('manager_resource_posi');

       $operateSataff->manager_resource_fail= Input::get('manager_resource_fail') ;
        $operateSataff->manager_resource_date = Input::get('manager_resource_date');

        $operateSataff->manager_resource_other = Input::get('manager_resource_other');
        $operateSataff->manager_resource_othercom = Input::get('manager_resource_othercom');


        $operateSataff->manager_resource_nre = Input::get('manager_resource_nre');



        $operateSataff->signa2 = Input::get('signa2');
        $operateSataff->signa3 = Input::get('signa3');

        $operateSataff->signa4 = Input::get('signa4');




        $operateSataff->startwork_90 = Input::get('startrate_90');
        $operateSataff->endtwork_90 = Input::get('endrate_90');
        $operateSataff->sick_leave_90 = Input::get('sick_90');
        $operateSataff->errand_leave_90 = Input::get('errand_90');
        $operateSataff->absence_90 = Input::get('absence_90');
        $operateSataff->vacation_90 = Input::get('vacation_90');
        $operateSataff->line_terms_90= Input::get('line_90') ;
        $operateSataff->line_min_90 = Input::get('min_90');
        $operateSataff->NumberDate_90 = Input::get('NumberDate_90');
        $operateSataff->save();
        Session::flash('flash_message','สำเร็จ!! ขอบคุณสําหรับการประเมิน');
        return redirect('home');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        if($id != ''){

            DB::table('ngg_employee')
            ->where('nem_id', '=',  $id)
            ->update(['recheck_Oper' => 0]);
    
            DB::table('ngg_employee')
            ->where('nem_id', '=',  $id)
            ->update(['recheck_Oper_90' => 0]);
    
    
            DB::table('ngg_employee')
            ->where('nem_id', '=',  $id)
            ->update(['degree' => 0]);
    
            DB::table('ngg_employee')
            ->where('nem_id', '=',  $id)
            ->update(['recheck_conduct' => 0]);

        }
       
        
        $operate =   DB::table('_ans_operate_staff')->where('id', '=',  $id)->delete();
        return redirect('home');
    }
}
