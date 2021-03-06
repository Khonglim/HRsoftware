<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Operate</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
      <style>
      body {
        font-family: 'Prompt', sans-serif;
       
      }
      </style>
  <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
  

    </head>
<body>
      <div class="container">
      <style>
            #customers {
                font-family:'Prompt', sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
    
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #customers tr:nth-child(even){background-color: #F6B7AE;}
    
            #customers tr:hover {background-color: #99ffff;}
    
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #E96060;
                color: white;
            }
            .table-wrapper-scroll-y {
  display: block;
  max-height: 100%;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
            </style>
    
    <div class="container-fluid">
            @if ($operate->degree_enable == 1)
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับบังคับบัญชา</h2>
            @else
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับปฏิบัติการ</h2>
            @endif
           
            <div class="font" style="text-align:center;"><b>คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน</b></div>
            <b>1. ระดับในการประเมินผล</b><br>
            &emsp;&emsp;4 ดีมาก = ผลการปฎิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
            &emsp;&emsp;3 ดี = ผลการปฎิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br></dd>
            &emsp;&emsp;2 พอใช้ = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
            &emsp;&emsp;1 ต้องปรับปรุง = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>
            <b>2.การประเมินผลให้แยกประเมินผลตามหัวข้อประเมิน และคิดคะแนนรวมดังนี้</b><br>
            &emsp;&emsp;2.1. ระดับพนักงานทั่วไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-15. <u>ได้ผลรวมคะแนนเท่าไหร่ ให้คูณด้วย 100หาร60</u><br>
            &emsp;&emsp;2.2. ระดับหัวหน้างานขึ้นไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-25 <br>
            <b>3. ผู้ถูกประเมินจะต้องได้ 60คะแนน ขึ้นไป จึงจะผ่านเกณฑ์การประเมินผลการทดลองงาน</b><br>
            <b>4. เขียนเครื่องหมาย <input type="checkbox" checked="checked"> ลงในช่องประเมินผล ตามผลการปฏิบัติงานที่ประเมินได้</b><br>
            <b>5. ผู้ประเมินแจ้งให้ผู้ถูกประเมินทราบล่วงหน้าก่อนวันครบรอบกำหนดทดลองงาน 119วัน <u>โดยให้แจ้งผู้ถูกประเมินไม่น้อยกว่า30วัน ก่อนการจ่ายค่าจ้างในรอบถัดไป</u></b><br><br><br>
            <div class="font"><b>บริษัท ในเครือ เอ็น จี จี กรุ๊ป </b></div>
            <div class="card">
                        <div class="card-header">การประเมินผลการทดลองงาน</div>
                        <div class="card-body">
                        <div class="form-group">
                        <div class="row">
                                    <div class="col-md-4 ">
                                                <div class="form-group ">
                                                    <label class="control-label ">ชื่อ-สกุล:</label>
                                                   
                                                <input type="text" class="form-control"  readonly value="{{$operate->first_name}}">
                                                   </div>
                                
                                            </div>
                                            <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label">รหัสพนักงาน:</label>
                                                      <input type="text" class="form-control" name="id_employ"  readonly  value="{{$operate->new_id_employ}}">
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">ตำแหน่ง:</label>
                                                                <input type="text" class="form-control" name="position" readonly value="{{$operate->new_position}}" >
                                                      
                                                               </div>
                                            
                                                        </div>
                              </div>
                              <div class="row">
                                          <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label ">แผนก/ฝ่าย:</label>
                                                          <input type="text" class="form-control" name="department"   readonly value="{{$operate->new_department}}" >
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">วันเริ่มงาน:</label>
                                                            <input type="text" name="dateStart2" id="dateStart2" class="form-control" readonly value="{{$operate->starttime}}">
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ครบการทดลองงาน:</label>
                                                                  <input type="text" name="dateEnd2" id="dateEnd2"  class="form-control" readonly value="{{$operate->endtime}}">
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                    </div>
                                    <div class="row">
                                                <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label ">จำนวนวัน:</label>
                                                            <input type="text" name="totolDay2" id="totolDay2"   readonly class="form-control" readonly value="{{$operate->number}}"/>
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ระดับ:</label>
                                                                  <input type="text" name="degree" id="degree"  class="form-control"  readonly value="{{$operate->degree}}" />
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                              <div class="col-md-4 ">
                                                                        <div class="form-group ">
                                                                            <label class="control-label">ประเมินครั้งที่ 1 : วันที่ :</label>
                                                                            <input type="text" name="totolDay_60" id="totolDay_60"   class="form-control" readonly value="{{$operate->date_60}}"/>
                                                                  
                                                                           </div>
                                                        
                                                                    </div>
                                          </div>

                                          <div class="row">
                                                      <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label ">ประเมินครั้งที่ 2 : วันที่:</label>
                                                                      <input type="text" name="totolDay_90" id="totolDay_90"  class="form-control"  readonly value="{{$operate->date_90}}"/>
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                  
                                                </div>
                                             
                        </div>
                   
                        <div class="form-group">
                                <div class="col-sm-12">
                                        <div  class="table-wrapper-scroll-y">        
                    <table id="customers">
                            <tr>
                              <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสายครั้งที่ 1</th>
                            </tr>
                            <tr>
                              <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                              <td style="text-align:center">ลาป่วย(วัน )</td>
                              <td style="text-align:center">ลากิจ (วัน )</td>
                              <td style="text-align:center">ขาดงาน (วัน )</td>
                              <td style="text-align:center">พักร้อน (วัน )</td>
                              <td style="text-align:center">สาย (ครั้ง)</td>
                              <td style="text-align:center">สาย (นาที)</td>
    
                            </tr>
                            <tr>
                              <td style="text-align:center">ตั้งแต่วันที่ {{$operate->startwork_60}} <br><br>
                                ถึงวันที่    {{$operate->endwork_60}}
    
    
                            </td>
                              <td style="text-align:center"> {{$operate->sick_leave_60}}</td>
                              <td style="text-align:center">{{$operate->errand_leave_60}}</td>
                              <td style="text-align:center">{{$operate->absence_60}}</td>
                              <td style="text-align:center">{{$operate->vacation_60}}</td>
                              <td style="text-align:center">{{$operate->line_terms_60}}</td>
                              <td style="text-align:center">{{$operate->line_min_60}}</td>
    
                            </tr>
                          </table>
                                        </div>
    
                                </div>
                         </div>  
                         
                         
                         <div class="form-group">
                                <div class="col-sm-12">
                                        <div  class="table-wrapper-scroll-y">        
                                                <table id="customers">
                                                        <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย (การประเมิน 90 วัน)</th></tr>
                                                        <tr>
                                                            <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                                                            <td style="text-align:center">ลาป่วย(วัน )</td>
                                                            <td style="text-align:center">ลากิจ (วัน )</td>
                                                            <td style="text-align:center">ขาดงาน (วัน )</td>
                                                            <td style="text-align:center">พักร้อน (วัน )</td>
                                                            <td style="text-align:center">สาย (ครั้ง)</td>
                                                            <td style="text-align:center">สาย (นาที)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ตั้งแต่วันที่ :{{$operate->startwork_90}} <br>ถึงวันที่ :{{$operate->endtwork_90}}</td>
                                                            <td style="text-align:center">{{$operate->sick_leave_90}}</td>
                                                            <td style="text-align:center">{{$operate->errand_leave_90}}</td>
                                                            <td style="text-align:center">{{$operate->absence_90}}</td>
                                                            <td style="text-align:center">{{$operate->vacation_90}}</td>
                                                            <td style="text-align:center">{{$operate->line_terms_90}}</td>
                                                            <td style="text-align:center">{{$operate->line_min_90}}</td>
                                                        </tr>
                                                    </table>
                            
                                        </div>
    
                                </div>
                         </div>  
                  

@if( $operate->degree_enable == 1)
{{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true ,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
@csrf
<input type="hidden"  name="date90T"  id="date90T" value="<?php echo date("d/m/Y H:i:s");?>"/>
<div class="form-group">
      <div class="col-sm-12">
              <div  class="table-wrapper-scroll-y">        
<table id="customers">
<tr>
  <th ROWSPAN="3" style="text-align:center">หัวข้อการประเมิน<br>
      ( 100 คะแนน )
      </th>
  <th COLSPAN="2" style="text-align:center" >ระดับคะแนนการประเมินผล</th>

</tr>
<tr>
  <td align="center">ประเมินรอบ {{$operate->numberMN}} วัน</td>


</tr>
<tr>

  <td style="text-align:center">ระดับคะแนน</td>

</tr>
<tr>
  <td COLSPAN="4" style="text-align:center">ระดับผู้บังคับบัญชา ( Supervisory Level )</td>
</tr>
@foreach ($operate_qSup  as $operate_qSups)


<tr>


     <td  style="width:43%"  > {{  $operate_qSups->operate_qsup  }} </td>
     <td style="text-align:center">
                 @foreach ($operate_Chioce as $item)


                 <input type="radio" id="score90_{{$operate_qSups->id}}" name="score90_{{$operate_qSups->id}}" value={{$item->score_operate}} required > {{$item->score_operate}}  {{$item->meaning_operate}}&ensp;
                 @endforeach
     </td>
</tr>

@endforeach

<tr>
 <td style="text-align:center">
 รวมคะแนน
 </td>
 <td style="text-align:center">
 <input type="text" name="total_90" id="total_90" readonly>

  </td>


</tr>


<tr>


      <td  COLSPAN="4" >

              รวมคะแนนทั้งสิ้น <br> <br> ประเมินครั้งที่ 1   <input type="text" name="rate_60" id="rate_60" value="{{$operate->rate_60}}" readonly > คะแนน <br><br>
                            ประเมินครั้งที่ 2    <input type="text" name="rate_90" id="rate_90" readonly>
                        <br><br>
                         รวมหาร 2   <input type="text" name="rate_all" id="rate_all" readonly>
                            
                            
                            คะแนน
            </td>





</tr>









</table>
              </div>
</div>
</div>


<div class="row">

        <div class="form-group"> 
                <div class="col-md">
                      <label>ความคิดเห็นเพิ่มเติม: <br>(สำหรับผู้ประเมิน)</label>
                        <textarea class="form-control" rows="3" name="comments_90"></textarea>
                      </div>
                    </div>


<div class="col-md-1"></div>
<div class="form-group">
        <div class="col-md">
            <label>ความคิดเห็นเพิ่มเติม: <br>(จากผู้ประเมินครั้งแรก)</label>
            <textarea class="form-control" rows="3" name="comments_60" readonly>{{$operate->comments_60}}</textarea>
                  </div>
    </div>
</div>
<div class="row">
      
        <div class="form-group"> 
              <div class="col-md">
                    <label>จุดเด่น</label>
                      <textarea class="form-control" rows="3" name="comments_featured" readonly>{{$operate->comments_featured}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
    <div class="form-group"> 
          <div class="col-md">
                <label>จุดด้อย</label>
                  <textarea class="form-control" rows="3" name="comments_weakness" readonly>{{$operate->comments_weakness}} </textarea>
                </div>
              </div>
    </div>

    <div class="row">
            <div class="form-group">
                <label  class="col-sm-2 control-label"></label>
        
                        <div class="col-md">
                        <div class="checkbox">
                                <label><input type="checkbox" value="ไม่ผ่านทดลองงาน" name="experimental" id="experimental">ไม่ผ่านทดลองงาน  ให้มีผลบังคับ     ตั้งแต่วันที่: </label>   
                                
                                <input type="date"  name="clsdate"  id="clsdate" class="form-control" disabled required>
                              </div>
                            </div>
                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-md">
                                    <div class="checkbox">
                                            <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" name="full_time_worker" id="full_time_worker">อนุมัติให้บรรจุเป็นพนักงานประจำ</label><br> ตั้งแต่วันที่:
                                            
                        <input type="date"  name="dateinto"  id="dateinto" class="form-control" required  disabled > 
                        ตำแหน่ง:<input type="text"  id="t2"  class="form-control" name="full_time_worker_position"  required  disabled/>
                                          </div>
                                </div>
                </div>
                <div class="col-md-1"></div>
                <div class="form-group">
                        <label  class="col-sm-2 control-label"></label>
                        <div class="col-md">
                                <div class="checkbox">
                                        <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" id="modify" name="modify">อนุมัติให้บรรจุเป็นพนักงานประจำ และปรับตำแหน่ง จากตำแหน่ง:</label>
                                        <input type="text" name="modify_position1" id="t1"   class="form-control"  required disabled/>
        
                                        ตั้งแต่วันที่:<input type="date"  name="modify_date"  id="modify_date"  class="form-control" required disabled> เป็นตำแหน่ง:
                                        <input type="text" name="modify_position2" id="modify_position2"   class="form-control" required disabled/>
                                      </div>
                            </div>
                </div>
            </div>
            <div class="form-group">
                        
                <div class="col-md-3">
                 <div class="checkbox">
                        <label><input type="checkbox" value="อื่นๆ"  name="other_90" id="other_90">อื่นๆ</label>  
                        
                        <textarea class="form-control" rows="3" name="other_com_90" disabled  required></textarea>
                    </div>
                    </div>
                 </div>
<div class="form-group">

      <label  class="col-sm-2 control-label"> ชื่อผู้ประเมิน:</label>
      <div class="col-sm-4">
              <input type="text" name="namerate_90" id="namerate_90" required class="form-control">
            </div>
           </div>
           <div class="form-group">
                  <div class="col-sm-3"></div>
              <div class="col-sm-4">

                  <div class="sigPad">
                          <ul class="sigNav">
                            <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                            <li class="clearButton"><a href="#clear">Clear</a></li>
                          </ul>
                          <div class="sig sigWrapper">
                            <div class="typed"></div>
                            <canvas class="pad" width="220" height="70"></canvas>
                            <input type="hidden" name="signa1_90" class="output">

                          </div>
                        </div>
            </div>

            <center>   <span id="sendData">    <button type="submit" class="btn btn-info pull-right">ตกลง</button> </span></center> 
            {{Form::close()}}
    
@else
{{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
@csrf
<input type="hidden"  name="date90T"  id="date90T" value="<?php echo date("d/m/Y H:i:s");?>"/>
<div class="form-group">
      <div class="col-sm-12">
             <div  class="table-wrapper-scroll-y">        
<table id="customers">

<tr>
 <th ROWSPAN="3" style="text-align:center">หัวข้อการประเมิน<br>
     ( 100 คะแนน )
     </th>
 <th COLSPAN="1" style="text-align:center" >ระดับคะแนนการประเมินผล</th>

</tr>
<tr>
 <td align="center">ประเมินรอบ  วัน</td>


</tr>
<tr>
 <td style="text-align:center">ระดับคะแนน</td>


</tr>
<tr>
 <td COLSPAN="2" style="text-align:center">ระดับปฏิบัติการ ( Operational Level )</td>
</tr>
@foreach ($operate_qSeff as $operate_qSef)


<tr>


     <td  style="width:43%"  > {{  $operate_qSef->operate_qstaff  }} </td>
     <td style="text-align:center">
                 @foreach ($operate_Chioce as $item)


                 <input type="radio" id="score90_{{$operate_qSef->id}}" name="score90_{{$operate_qSef->id}}" value={{$item->score_operate}} required > {{$item->score_operate}}  {{$item->meaning_operate}}&ensp;


                 @endforeach
     </td>


</tr>

@endforeach

<tr>
     <td style="text-align:center">

     รวมคะแนน

     </td>

     <td style="text-align:center">

  <input type="text" name="total_90" id="total_90" style="text-align:center" readonly>

      </td>

  </tr>

  <tr>
     <td  COLSPAN="2" >

         รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1   <input type="text" name="rate_60" id="rate_60" value="{{$operate->rate_60}}" readonly style="text-align:center"  > คะแนน  <br><br>
                               ประเมินครั้งที่ 2    <input type="text" name="rate_90" id="rate_90" readonly style="text-align:center"> คะแนน<br><br>
                                      (รวมกันหาร 2) =  <input type="text" name="rate_all" id="rate_all" readonly style="text-align:center"> คะแนน
      </td>
  </tr>
</table>
             </div>
</div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-md">
        <label>ความคิดเห็นเพิ่มเติม: <br>(สำหรับผู้ประเมิน)</label>
            <textarea class="form-control" rows="3" name="comments_90" required></textarea>
    </div>
    </div>
    <div class="col-md-1"></div>
    <div class="form-group">
        <div class="col-md">
        <label>ความคิดเห็นเพิ่มเติม: <br>(จากผู้ประเมินครั้งแรก)</label>
        <textarea class="form-control" rows="3" name="assessor" readonly>{{$operate->comments_60}}</textarea>
    </div>
    </div>
  

</div>

<div class="row">
      
    <div class="form-group"> 
          <div class="col-md">
                <label>จุดเด่น</label>
                  <textarea class="form-control" rows="3" name="comments_featured" readonly>{{$operate->comments_featured}}</textarea>
                </div>
              </div>
              <div class="col-md-1"></div>
<div class="form-group"> 
      <div class="col-md">
            <label>จุดด้อย</label>
              <textarea class="form-control" rows="3" name="comments_weakness" readonly>{{$operate->comments_weakness}} </textarea>
            </div>
          </div>
</div>
<div class="row">
    <div class="form-group">
        <label  class="col-sm-2 control-label"></label>

                <div class="col-md">
                <div class="checkbox">
                        <label><input type="checkbox" value="ไม่ผ่านทดลองงาน" name="experimental"  id="experimental">ไม่ผ่านทดลองงาน  ให้มีผลบังคับ     ตั้งแต่วันที่: </label>   
                        <input type="date"  name="clsdate"  id="clsdate" class="form-control" disabled  required>
                      </div>
                    </div>
                    <label  class="col-sm-2 control-label"></label>
                    <div class="col-md">
                            <div class="checkbox">
                                    <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" name="full_time_worker"  id="full_time_worker">อนุมัติให้บรรจุเป็นพนักงานประจำ</label><br> ตั้งแต่วันที่:
                                    
                                    <input type="date"  name="dateinto"  id="dateinto" class="form-control"  required   disabled>
                                     ตำแหน่ง:
                                    <input type="text"  id="t2"  class="form-control" name="full_time_worker_position"  required  disabled>
                                  </div>
                        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="form-group">
                <label  class="col-sm-2 control-label"></label>
                <div class="col-md">
                        <div class="checkbox">
                                <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" name="modify"  id="modify">อนุมัติให้บรรจุเป็นพนักงานประจำ และปรับตำแหน่ง จากตำแหน่ง:</label>
                                <input type="text" name="modify_position1" id="t1"   class="form-control"  disabled required/>

                                ตั้งแต่วันที่:<input type="date"  name="modify_date"  id="modify_date"  class="form-control" disabled required> เป็นตำแหน่ง:
                                <input type="text" name="modify_position2" id="modify_position2"   class="form-control" disabled required  />
                              </div>
                    </div>
        </div>
    </div>
    <div class="form-group">
                
        <div class="col-md-3">
         <div class="checkbox">
                <label><input type="checkbox" value="อื่นๆ"  name="other_90" id="other_90">อื่นๆ</label>  
                
                <textarea class="form-control" rows="3" name="other_com_90" disabled required id="other_com_90"></textarea>
            </div>
            </div>
         </div>
         <div class="form-group">

               <label  class="col-sm-2 control-label"> ชื่อผู้ประเมิน:</label>
               <div class="col-sm-4">
                       <input type="text" name="namerate_90" id="namerate_90" required class="form-control" required>
                     </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-5">
                                    <div class="sigPad">
                                            <ul class="sigNav">
                                              <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                              <li class="clearButton"><a href="#clear">Clear</a></li>
                                            </ul>
                                            <div class="sig sigWrapper">
                                              <div class="typed"></div>
                                              <canvas class="pad" width="220" height="70"></canvas>
                                              <input type="hidden" name="signa1_90" class="output">

                                            </div>
                                          </div>
                        </div>
                    </div>
         



         </div>
         <center>   <span id="sendData">        <button type="submit" class="btn btn-info pull-right">ตกลง</button>  </span></center>
                    {{Form::close()}}
            
@endif
                            

                                      












                        </div>
                        </div>
                              

                        
                      </div>
    </div>


                     

















    
    
     
    
    
    
    
    
    
    
    
    
    
    
    </div>






      </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
  <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>

@if( $operate->degree_enable == 1)
<script>
    
            $('input[type=radio]').change(function(){
               
                
                var group_90_1=0;
                var group_90_2=0;
                var group_90_3=0;
                var group_90_4=0;
                var group_90_5=0;
                var group_90_6=0;
                var group_90_7=0;
                var group_90_8=0;
                var group_90_9=0;
                var group_90_10=0;
                var group_90_11=0;
                var group_90_12=0;
                var group_90_13=0;
                var group_90_14=0;
                var group_90_15=0;
                var group_90_16=0;
                var group_90_17=0;
                var group_90_18=0;
                var group_90_19=0;
                var group_90_20=0;
                var group_90_21=0;
                var group_90_22=0;
                var group_90_23=0;
                var group_90_24=0;
                var group_90_25=0;
                var group_90_total =0;
    
               var group_all_total =0;
    
    
    
    
     
    
    
    
    
    
    
    
           if(score90_1[0].checked ){
                   group_90_1 =  score90_1[0].value
                           }
                           if( score90_1[1].checked ){
                               group_90_1 =  score90_1[1].value
                           }
                           if( score90_1[2].checked ){
                               group_90_1 =  score90_1[2].value
    
                           }
                            if( score90_1[3].checked ){
                               group_90_1 =  score90_1[3].value
    
                           }
    
    
            if(score90_2[0].checked ){
                   group_90_2 =  score90_2[0].value
                           }
                           if( score90_2[1].checked ){
                               group_90_2 =  score90_2[1].value
                           }
                           if( score90_2[2].checked ){
                               group_90_2 =  score90_2[2].value
    
                           }
                            if( score90_2[3].checked ){
                               group_90_2 =  score90_2[3].value
    
                           }
    
            if(score90_3[0].checked ){
                   group_90_3 =  score90_3[0].value
                           }
                           if( score90_3[1].checked ){
                               group_90_3 =  score90_3[1].value
                           }
                           if( score90_3[2].checked ){
                               group_90_3 =  score90_3[2].value
    
                           }
                            if( score90_3[3].checked ){
                               group_90_3 =  score90_3[3].value
    
                           }
    
    
            if(score90_4[0].checked ){
                   group_90_4 =  score90_4[0].value
                           }
                           if( score90_4[1].checked ){
                               group_90_4 =  score90_4[1].value
                           }
                           if( score90_4[2].checked ){
                               group_90_4 =  score90_4[2].value
    
                           }
                            if( score90_4[3].checked ){
                               group_90_4 =  score90_4[3].value
    
                           }
    
            if(score90_5[0].checked ){
                   group_90_5 =  score90_5[0].value
                           }
                           if( score90_5[1].checked ){
                               group_90_5 =  score90_5[1].value
                           }
                           if( score90_5[2].checked ){
                               group_90_5 =  score90_5[2].value
    
                           }
                            if( score90_5[3].checked ){
                               group_90_5 =  score90_5[3].value
    
                           }
    
    
    
            if(score90_6[0].checked ){
                   group_90_6 =  score90_6[0].value
                           }
                           if( score90_6[1].checked ){
                               group_90_6 =  score90_6[1].value
                           }
                           if( score90_6[2].checked ){
                               group_90_6 =  score90_6[2].value
    
                           }
                            if( score90_6[3].checked ){
                               group_90_6 =  score90_6[3].value
    
                           }
    
    
            if(score90_7[0].checked ){
                   group_90_7 =  score90_7[0].value
                           }
                           if( score90_7[1].checked ){
                               group_90_7 =  score90_7[1].value
                           }
                           if( score90_7[2].checked ){
                               group_90_7 =  score90_7[2].value
    
                           }
                            if( score90_7[3].checked ){
                               group_90_7 =  score90_7[3].value
    
                           }
    
    
            if(score90_8[0].checked ){
                   group_60_8 =  score90_8[0].value
                           }
                           if( score90_8[1].checked ){
                               group_90_8 =  score90_8[1].value
                           }
                           if( score90_8[2].checked ){
                               group_90_8 =  score90_8[2].value
    
                           }
                            if( score90_8[3].checked ){
                               group_90_8 =  score90_8[3].value
    
                           }
    
            if(score90_9[0].checked ){
                   group_90_9 =  score90_9[0].value
                           }
                           if( score90_9[1].checked ){
                               group_90_9 =  score90_9[1].value
                           }
                           if( score90_9[2].checked ){
                               group_90_9 =  score90_9[2].value
    
                           }
                            if( score90_9[3].checked ){
                               group_90_9 =  score90_9[3].value
    
                           }
    
    
           if(score90_10[0].checked ){
                   group_90_10 =  score90_10[0].value
                           }
                           if( score90_10[1].checked ){
                               group_90_10 =  score90_10[1].value
                           }
                           if( score90_10[2].checked ){
                               group_90_10 =  score90_10[2].value
    
                           }
                            if( score90_10[3].checked ){
                               group_90_10 =  score90_10[3].value
    
                           }
    
           if(score90_11[0].checked ){
                   group_90_11 =  score90_11[0].value
                           }
                           if( score90_11[1].checked ){
                               group_90_11 =  score90_11[1].value
                           }
                           if( score90_11[2].checked ){
                               group_90_11 =  score90_11[2].value
    
                           }
                            if( score90_11[3].checked ){
                               group_90_11 =  score90_11[3].value
    
                           }
    
           if(score90_12[0].checked ){
                   group_90_12 =  score90_12[0].value
                           }
                           if( score90_12[1].checked ){
                               group_90_12 =  score90_12[1].value
                           }
                           if( score90_12[2].checked ){
                               group_90_12 =  score90_12[2].value
    
                           }
                            if( score90_12[3].checked ){
                               group_90_12 =  score90_12[3].value
    
                           }
    
           if(score90_13[0].checked ){
                   group_90_13 =  score90_13[0].value
                           }
                           if( score90_13[1].checked ){
                               group_90_13 =  score90_13[1].value
                           }
                           if( score90_13[2].checked ){
                               group_90_13=  score90_13[2].value
    
                           }
                            if( score90_13[3].checked ){
                               group_90_13 =  score90_13[3].value
    
                           }
    
           if(score90_14[0].checked ){
                   group_90_14 =  score90_14[0].value
                           }
                           if( score90_14[1].checked ){
                               group_90_14 =  score90_14[1].value
                           }
                           if( score90_14[2].checked ){
                               group_90_14=  score90_14[2].value
    
                           }
                            if( score90_14[3].checked ){
                               group_90_14 =  score90_14[3].value
    
                           }
    
           if(score90_15[0].checked ){
                   group_90_15 =  score90_15[0].value
                           }
                           if( score90_15[1].checked ){
                               group_90_15=  score90_15[1].value
                           }
                           if( score90_15[2].checked ){
                               group_90_15=  score90_15[2].value
    
                           }
                            if( score90_15[3].checked ){
                               group_90_15 =  score90_15[3].value
    
                           }
    
                           if(score90_16[0].checked ){
               group_90_16 =  score90_16[0].value
                       }
                       if( score90_16[1].checked ){
                           group_90_16=  score90_16[1].value
                       }
                       if( score90_16[2].checked ){
                           group_90_16=  score90_16[2].value

                       }
                        if( score90_16[3].checked ){
                           group_90_16 =  score90_16[3].value

                       }

                       if(score90_17[0].checked ){
                                 group_90_17 =  score90_17[0].value
                       }
                       if( score90_17[1].checked ){
                           group_90_17=  score90_17[1].value
                       }
                       if( score90_17[2].checked ){
                           group_90_17=  score90_17[2].value

                       }
                        if( score90_17[3].checked ){
                           group_90_17 =  score90_17[3].value

                       }



 if(score90_18[0].checked ){
               group_90_18 =  score90_18[0].value
                       }
                       if( score90_18[1].checked ){
                           group_90_18=  score90_18[1].value
                       }
                       if( score90_18[2].checked ){
                           group_90_18=  score90_18[2].value

                       }
                        if( score90_18[3].checked ){
                           group_90_18 =  score90_18[3].value

                       }



 if(score90_19[0].checked ){
               group_90_19 =  score90_19[0].value
                       }
                       if( score90_19[1].checked ){
                           group_90_19=  score90_19[1].value
                       }
                       if( score90_19[2].checked ){
                           group_90_19=  score90_19[2].value

                       }
                        if( score90_19[3].checked ){
                           group_90_19 =  score90_19[3].value

                       }



 if(score90_20[0].checked ){
               group_90_20 =  score90_20[0].value
                       }
                       if( score90_20[1].checked ){
                           group_90_20=  score90_20[1].value
                       }
                       if( score90_20[2].checked ){
                           group_90_20=  score90_20[2].value

                       }
                        if( score90_20[3].checked ){
                           group_90_20 =  score90_20[3].value

                       }


 if(score90_21[0].checked ){
               group_90_21 =  score90_21[0].value
                       }
                       if( score90_21[1].checked ){
                           group_90_21=  score90_21[1].value
                       }
                       if( score90_21[2].checked ){
                           group_90_21=  score90_21[2].value

                       }
                        if( score90_21[3].checked ){
                           group_90_21 =  score90_21[3].value

                       }


 if(score90_22[0].checked ){
               group_90_22 =  score90_22[0].value
                       }
                       if( score90_22[1].checked ){
                           group_90_22=  score90_22[1].value
                       }
                       if( score90_22[2].checked ){
                           group_90_22=  score90_22[2].value

                       }
                        if( score90_22[3].checked ){
                           group_90_22 =  score90_22[3].value

                       }




 if(score90_23[0].checked ){
               group_90_23 =  score90_23[0].value
                       }
                       if( score90_23[1].checked ){
                           group_90_23=  score90_23[1].value
                       }
                       if( score90_23[2].checked ){
                           group_90_23=  score90_23[2].value

                       }
                        if( score90_23[3].checked ){
                           group_90_23 =  score90_23[3].value

                       }


       if(score90_24[0].checked ){
               group_90_24 =  score90_24[0].value
                       }
                       if( score90_24[1].checked ){
                           group_90_24=  score90_24[1].value
                       }
                       if( score90_24[2].checked ){
                           group_90_24=  score90_24[2].value

                       }
                        if( score90_24[3].checked ){
                           group_90_24 =  score90_24[3].value

                       }


       if(score90_25[0].checked ){
               group_90_25 =  score90_25[0].value
                       }
                       if( score90_25[1].checked ){
                           group_90_25=  score90_25[1].value
                       }
                       if( score90_25[2].checked ){
                           group_90_25=  score90_25[2].value

                       }
                        if( score90_25[3].checked ){
                           group_90_25 =  score90_25[3].value

                       }


                           group_90_total =(parseInt(group_90_1)+parseInt(group_90_2)+parseInt(group_90_3)+parseInt(group_90_4)+parseInt(group_90_5)+parseInt(group_90_6)+parseInt(group_90_7)+parseInt(group_90_8)+parseInt(group_90_9)+parseInt(group_90_10)+parseInt(group_90_11)+parseInt(group_90_12)+parseInt(group_90_13)+parseInt(group_90_14)+parseInt(group_90_15)
       +parseInt(group_90_16)+parseInt(group_90_17)+parseInt(group_90_18)+parseInt(group_90_19)+parseInt(group_90_20)+parseInt(group_90_21) +parseInt(group_90_22)+parseInt(group_90_23)+parseInt(group_90_24)+parseInt(group_90_25)                );

    
    
    
    
                           $('#total_90').val(group_90_total.toFixed( 2 ));
                           $('#rate_90').val(group_90_total.toFixed( 2 ));
    
    
    
                     $('#rate_all').val(( parseInt(group_90_total.toFixed( 2 ))+parseInt({{$operate->rate_60}}))/2);
    
    
    
           });
           </script>
<script>
        $(document).ready(function() {
          $('.sigPad').signaturePad({drawOnly:true});
                 
        });
      </script>
@else

           <script>

            $('input[type=radio]').change(function(){
    
                var group_total =0;


                var group_90_1=0;
                var group_90_2=0;
                var group_90_3=0;
                var group_90_4=0;
                var group_90_5=0;
                var group_90_6=0;
                var group_90_7=0;
                var group_90_8=0;
                var group_90_9=0;
                var group_90_10=0;
                var group_90_11=0;
                var group_90_12=0;
                var group_90_13=0;
                var group_90_14=0;
                var group_90_15=0;
                var group_90_total =0;

               var group_all_total =0;




              






           if(score90_1[0].checked ){
                   group_90_1 =  score90_1[0].value
                           }
                           if( score90_1[1].checked ){
                               group_90_1 =  score90_1[1].value
                           }
                           if( score90_1[2].checked ){
                               group_90_1 =  score90_1[2].value

                           }
                            if( score90_1[3].checked ){
                               group_90_1 =  score90_1[3].value

                           }


            if(score90_2[0].checked ){
                   group_90_2 =  score90_2[0].value
                           }
                           if( score90_2[1].checked ){
                               group_90_2 =  score90_2[1].value
                           }
                           if( score90_2[2].checked ){
                               group_90_2 =  score90_2[2].value

                           }
                            if( score90_2[3].checked ){
                               group_90_2 =  score90_2[3].value

                           }

            if(score90_3[0].checked ){
                   group_90_3 =  score90_3[0].value
                           }
                           if( score90_3[1].checked ){
                               group_90_3 =  score90_3[1].value
                           }
                           if( score90_3[2].checked ){
                               group_90_3 =  score90_3[2].value

                           }
                            if( score90_3[3].checked ){
                               group_90_3 =  score90_3[3].value

                           }


            if(score90_4[0].checked ){
                   group_90_4 =  score90_4[0].value
                           }
                           if( score90_4[1].checked ){
                               group_90_4 =  score90_4[1].value
                           }
                           if( score90_4[2].checked ){
                               group_90_4 =  score90_4[2].value

                           }
                            if( score90_4[3].checked ){
                               group_90_4 =  score90_4[3].value

                           }

            if(score90_5[0].checked ){
                   group_90_5 =  score90_5[0].value
                           }
                           if( score90_5[1].checked ){
                               group_90_5 =  score90_5[1].value
                           }
                           if( score90_5[2].checked ){
                               group_90_5 =  score90_5[2].value

                           }
                            if( score90_5[3].checked ){
                               group_90_5 =  score90_5[3].value

                           }



            if(score90_6[0].checked ){
                   group_90_6 =  score90_6[0].value
                           }
                           if( score90_6[1].checked ){
                               group_90_6 =  score90_6[1].value
                           }
                           if( score90_6[2].checked ){
                               group_90_6 =  score90_6[2].value

                           }
                            if( score90_6[3].checked ){
                               group_90_6 =  score90_6[3].value

                           }


            if(score90_7[0].checked ){
                   group_90_7 =  score90_7[0].value
                           }
                           if( score90_7[1].checked ){
                               group_90_7 =  score90_7[1].value
                           }
                           if( score90_7[2].checked ){
                               group_90_7 =  score90_7[2].value

                           }
                            if( score90_7[3].checked ){
                               group_90_7 =  score90_7[3].value

                           }


            if(score90_8[0].checked ){
                   group_60_8 =  score90_8[0].value
                           }
                           if( score90_8[1].checked ){
                               group_90_8 =  score90_8[1].value
                           }
                           if( score90_8[2].checked ){
                               group_90_8 =  score90_8[2].value

                           }
                            if( score90_8[3].checked ){
                               group_90_8 =  score90_8[3].value

                           }

            if(score90_9[0].checked ){
                   group_90_9 =  score90_9[0].value
                           }
                           if( score90_9[1].checked ){
                               group_90_9 =  score90_9[1].value
                           }
                           if( score90_9[2].checked ){
                               group_90_9 =  score90_9[2].value

                           }
                            if( score90_9[3].checked ){
                               group_90_9 =  score90_9[3].value

                           }


           if(score90_10[0].checked ){
                   group_90_10 =  score90_10[0].value
                           }
                           if( score90_10[1].checked ){
                               group_90_10 =  score90_10[1].value
                           }
                           if( score90_10[2].checked ){
                               group_90_10 =  score90_10[2].value

                           }
                            if( score90_10[3].checked ){
                               group_90_10 =  score90_10[3].value

                           }

           if(score90_11[0].checked ){
                   group_90_11 =  score90_11[0].value
                           }
                           if( score90_11[1].checked ){
                               group_90_11 =  score90_11[1].value
                           }
                           if( score90_11[2].checked ){
                               group_90_11 =  score90_11[2].value

                           }
                            if( score90_11[3].checked ){
                               group_90_11 =  score90_11[3].value

                           }

           if(score90_12[0].checked ){
                   group_90_12 =  score90_12[0].value
                           }
                           if( score90_12[1].checked ){
                               group_90_12 =  score90_12[1].value
                           }
                           if( score90_12[2].checked ){
                               group_90_12 =  score90_12[2].value

                           }
                            if( score90_12[3].checked ){
                               group_90_12 =  score90_12[3].value

                           }

           if(score90_13[0].checked ){
                   group_90_13 =  score90_13[0].value
                           }
                           if( score90_13[1].checked ){
                               group_90_13 =  score90_13[1].value
                           }
                           if( score90_13[2].checked ){
                               group_90_13=  score90_13[2].value

                           }
                            if( score90_13[3].checked ){
                               group_90_13 =  score90_13[3].value

                           }

           if(score90_14[0].checked ){
                   group_90_14 =  score90_14[0].value
                           }
                           if( score90_14[1].checked ){
                               group_90_14 =  score90_14[1].value
                           }
                           if( score90_14[2].checked ){
                               group_90_14=  score90_14[2].value

                           }
                            if( score90_14[3].checked ){
                               group_90_14 =  score90_14[3].value

                           }

           if(score90_15[0].checked ){
                   group_90_15 =  score90_15[0].value
                           }
                           if( score90_15[1].checked ){
                               group_90_15=  score90_15[1].value
                           }
                           if( score90_15[2].checked ){
                               group_90_15=  score90_15[2].value

                           }
                            if( score90_15[3].checked ){
                               group_90_15 =  score90_15[3].value

                           }

                       group_90_total =((parseInt(group_90_1)+parseInt(group_90_2)+parseInt(group_90_3)+parseInt(group_90_4)+parseInt(group_90_5)+parseInt(group_90_6)+parseInt(group_90_7)+parseInt(group_90_8)+parseInt(group_90_9)+parseInt(group_90_10)+parseInt(group_90_11)+parseInt(group_90_12)+parseInt(group_90_13)+parseInt(group_90_14)+parseInt(group_90_15))*100/60);




                           $('#total_90').val(group_90_total.toFixed( 2 ));
                           $('#rate_90').val(group_90_total.toFixed( 2 ));



                     $('#rate_all').val(( parseInt(group_90_total.toFixed( 2 ))+parseInt({{$operate->rate_60}}))/2);



           });
           </script>

<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
             
    });
  </script>
           @endif


<script>
 $(document).ready(function() {

      $('#experimental').click(function() {
  
  if ($(this).is(':checked')) {

      $("#clsdate").removeAttr('disabled', 'disabled');
    
  }else {
     
      $("#clsdate").attr('disabled', 'disabled'); 
      document.getElementById('clsdate').value = "";
      
      
  }
});


  $('#full_time_worker').click(function() {
  
  if ($(this).is(':checked')) {

      $("#dateinto").removeAttr('disabled', 'disabled');
      $("#t2").removeAttr('disabled', 'disabled');
    
  }else {
     
      $("#dateinto").attr('disabled', 'disabled'); 
      document.getElementById('clsdate').value = "";
      $("#t2").attr('disabled', 'disabled'); 
      document.getElementById('t2').value = "";
      
  }
});


 $('#modify').click(function() {
  
  if ($(this).is(':checked')) {

      $("#t1").removeAttr('disabled', 'disabled');
      $("#modify_date").removeAttr('disabled', 'disabled');
      $("#modify_position2").removeAttr('disabled', 'disabled');
  }else {
    $("#t1").attr('disabled', 'disabled'); 
      document.getElementById('t1').value = "";

      $("#modify_position2").attr('disabled', 'disabled'); 
      document.getElementById('modify_position2').value = "";

      $("#modify_date").attr('disabled', 'disabled'); 
      document.getElementById('modify_date').value = "";
      
  }
});



$('#other_90').click(function() {
  
  if ($(this).is(':checked')) {

      $("#other_com_90").removeAttr('disabled', 'disabled');
     
  }else {
   
      $("#other_com_90").attr('disabled', 'disabled'); 
      document.getElementById('other_com_90').value = "";
     
      
  }
});



    });


</script>



<script language="javascript">
  
        function fncSubmit()
        {
              if(document.form1.experimental.checked == false && document.form1.full_time_worker.checked == false
              
              &&  document.form1.modify.checked == false &&  document.form1.other_90.checked == false
              )
              {
                    
                    alert('กรุณา ติก อย่างน้อย 1 ตัวเลือก ด้านล่างแสดงความคิดเห็น ');
                   
                    return false;
              }
              else{
                      $("#sendData").html("ระบบกำลังทำการบันทึกโปรดรอสักครู่.....");    
                      
              }	
              
              document.form1.submit();
        }
        </script>
          
</body>
</html>