้
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Manpower</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
      <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">


      <script src='https://www.google.com/recaptcha/api.js'></script>
      <style>
            body {
                  font-family: 'Prompt', sans-serif;

            }
      </style>
</head>

<body>

      <div class="container">

            @if(Session::has('flash_message') )

            <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>

            @endif
            <form action="{{url('/manpower')}}" id="inviter" method="POST" onSubmit="JavaScript:return fncSubmit();"  name="form1" >
                  @csrf

                  <div class="row">
                        <div class="col-md-4 ">
                              การสรรหา<b class="text-danger">*</b>
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input" name="external_Recruit" id="external_Recruit" value="สรรหาภายนอก/External Recruit" >สรรหาภายนอก/(External Recruit)
                                                            </label>

                                          <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="internal_Recruit" id="internal_Recruit" value="สรรหาภายใน/Internal Recruit" >สรรหาภายใน/(Internal Recruit)
                                                                      </label>
                                    </div>
                              </div>

                        </div>
                  </div>
                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">บริษัทต้นสังกัด/company<b class="text-danger">*</b></label>                                    {{Form::text('company','',['class'=>'form-control','id'=>'company','required'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">ตำแหน่งที่ต้องการ/Position Required<b class="text-danger">*</b></label>                                    {{Form::text('position_required','',['class'=>'form-control','id'=>'position_required','required'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">แผนก/ส่วน/Section/Dividion<b class="text-danger">*</b></label>                                    
                                    {{Form::text('section','',['class'=>'form-control','id'=>'section','required'])}}
                              </div>

                        </div>



                  </div>
                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">วันที่ต้องการ/Date Required<b class="text-danger">*</b></label>                                    
                                    {{Form::date('date_required','',['class'=>'form-control','id'=>'date_required','required'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">จำนวนพนักงานที่ต้องการ/Number<b class="text-danger">*</b> </label>                                   
                                     {{Form::Number('number','',['class'=>'form-control','id'=>'number','required'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">อายุ/Age<b class="text-danger">*</b></label> 
                                    {{Form::Number('age','',['class'=>'form-control','id'=>'age','required'])}}
                              </div>

                        </div>
                  </div>

                  <div class="row">
                        <div class="col-md-5 ">
                              ประเภทของการจ้างงาน/Type of Employent<b class="text-danger">*</b>
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="permanent" id="permanent" value="ประจำ/Permanent">ประจำ/Permanent
                                                      </label>
                                          <div class="form-check">
                                                <label class="form-check-label" id="labe1">
                        <input type="checkbox" class="form-check-input"  name="daily1" id="daily1" value="รายวัน/Daily" >รายวัน/Daily
                               </label>
                                          </div>
                                          <div class="form-check">
                                                <label class="form-check-label" id="labe2">
                      <input type="checkbox" class="form-check-input"  name="monthly2" id="monthly2"  value="รายเดือน/Monthly" >รายเดือน/Monthly
                                                                                                </label>
                                          </div>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label" >
                                                        <input type="checkbox" class="form-check-input" name="apprentie" id="apprentie" value="ฝึกงาน/Apprentie">ฝึกงาน/Apprentie
                                                      </label>
                                                      <div class="form-check">
                                                                  <label class="form-check-label"  id="labe3">
                                     <input type="checkbox" class="form-check-input"  name="daily3" id="daily3" value="รายวัน/Daily" >รายวัน/Daily
                                                 </label>
                                                            </div>
                                                            <div class="form-check">
                                                                  <label class="form-check-label" id="labe4">
                   <input type="checkbox" class="form-check-input"  name="monthly4" id="monthly4" value="รายเดือน/Monthly" >รายเดือน/Monthly
                                                       </label>
                                                            </div>
                                                            <div class="form-check">
                               <label class="form-check-label" id="labe5">
                        <input type="checkbox" class="form-check-input" name="checkstart1"  id="checkstart1" value="เริ่มต้น" >เริ่มต้น 
                        <input type="date" name="timestart1" id="timestart1" class="form-control" >
                                                                                                        สิ้นสุด
                        <input type="date" name="timeend1"  id="timeend1" class="form-control" >
                                                                                                      </label>
                                                                  </div>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input" name="subcontract" id="subcontract" value="สัญญาจ้างชั่วคราว/Subcontract">สัญญาจ้างชั่วคราว/Subcontract
                                                            </label>
                                                            <div class="form-check">
                                                                        <label class="form-check-label" id="labe6">
                                    <input type="checkbox" class="form-check-input"  name="daily5" id="daily5" value="รายวัน/Daily" >รายวัน/Daily
                                                 </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                        <label class="form-check-label" id="labe7">
                               <input type="checkbox" class="form-check-input"  name="monthly6" id="monthly6" value="รายเดือน/Monthly" >รายเดือน/Monthly
                                                                  </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                              <label class="form-check-label" id="labe8">
                  <input type="checkbox" class="form-check-input" name="checkstart2" id="checkstart2" value="เริ่มต้น">เริ่มต้น 
                  <input type="date" name="timestart2" id="timestart2" class="form-control" >
                                                                                                              สิ้นสุด
                  <input type="date" name="timeend2" id="timeend2" class="form-control" >
                                                                                                            </label>
                                                                        </div>
                                                                  </div>

                              </div>



                        </div>
                        <div class="col-md-5 ">
                              ประเภทของความต้องการ/Type of Rquirement<b class="text-danger">*</b>
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="hire" id="hire" value="กรณีจ้างเพิ่ม/New">กรณีจ้างเพิ่ม/New
                                          </label>
                                          <textarea name="bec" id="bec" cols="20" rows="1" class="form-control"  placeholder="หมายเหตุ"  disabled required></textarea>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="substitute" id="substitute" value="กรณีทดแทน/Replace">กรณีทดแทน/Replace
                                                  <input type="text" name="name_substitute" id="name_substitute" class="form-control" placeholder="ชื่อ-นามสกุล" disabled required>
                                                </label>
                                    </div>
                              </div>
                        </div>
                  </div>


                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">อัตราจ้าง/Salary<b class="text-danger">*</b></label> {{Form::text('ratesalary','',['class'=>'form-control','id'=>'ratesalary','required' ])}}
                              </div>

                        </div>



                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">สวัสดิการอื่นๆ<b class="text-danger">*</b></label>
                                    <textarea class="form-control" rows="1" id="benefits" name="benefits" ></textarea>
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">ลักษณะงานที่ทำโดยสังเขป/Description<b class="text-danger">*</b></label>
                                    <textarea class="form-control" rows="1" id="description" name="description" ></textarea>
                              </div>

                        </div>

                  </div>

                  <div class="row">
                        <div class="col-md-5 ">
                              คุณสมบัติ/Qualification : เพศ/Sex<b class="text-danger">*</b>
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="gender" value="ชาย/Male" required>ชาย/Male
                                                                  </label>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                          <input type="radio" class="form-check-input" name="gender" value="หญิง/Female" required>หญิง/Female
                                                                          
                                                                        </label>
                                    </div>
                              </div>
                        </div>

                        <div class="col-md-6 ">
                              การศึกษา/Education<b class="text-danger">*</b></label>     <b class="text-danger">*</b>
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="primary" id="primary" value="ป.6/Primary School(P.6)" >ป.6/Primary School(P.6)
                                          </label>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" name="high_school" id="high_school" value="ม.6/High School(M.6)">ม.6/High School(M.6)
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="high_vocational" id="high_vocational" value="ปวส./High Vocational School">ปวส./High Vocational School
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <label class="form-check-label">
                                         <input type="checkbox" class="form-check-input" name="othereducation" id="othereducation" value="อื่นๆ (ส่วนสูง,น้ำหนัก,หน้าตา ฯลฯ/Other High,Weigh,Appearance etc)">อื่นๆ (ส่วนสูง,น้ำหนัก,หน้าตา ฯลฯ/Other High,Weigh,Appearance etc)
                                                </label>
                                    </div>

                                    <div class="form-check">
                                          <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="secondary" id="secondary" value="ม.3/Secondary">ม.3/Secondary
                                                </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="vocational" id="vocational" value="ปวช./Vocational School">ปวช./Vocational School
                                                      </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                       <input type="checkbox" class="form-check-input" name="undergraduate" id="undergraduate" value="ปริญญาตรี/Undergraduate">ปริญญาตรี/Undergraduate
                                                            </label>
                                    </div>
                              </div>

                        </div>
                  </div>

                  <div class="row">
                        ความสามารถพิเศษ/Special Skill<b class="text-danger">*</b></label>     
                        <div class="col-md-6 ">
                              <div class="form-check">
                                    <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="foreign_languages" id="foreign_languages" value="ภาษาต่างประเทศ/Foreign Languages Command">ภาษาต่างประเทศ/Foreign Languages Command 
                                           <input type="text" name="languages_name" id="languages_name" class="form-control" placeholder="ระบุ" required disabled>
                                                </label>

                              </div>
                              <div class="form-check">
                                    <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input"  name="typing" id="typing" value="พิมพ์ดีดไทย & อังกฤษ/Thai & English Typing">พิมพ์ดีดไทย & อังกฤษ/Thai & English Typing 
                                                                  <input type="text" name="typing_name" id="typing_name" class="form-control" placeholder="ระบุ" required disabled>
                                                                       </label>
                              </div>
                              <div class="form-check">

                                    <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input" name="computer_knowledge" id="computer_knowledge" value="ความรู้ทางคอมพิวเตอร์/Computer Knowledge">ความรู้ทางคอมพิวเตอร์/Computer Knowledge 
                                                                  <input type="text" name="knowledge_name" id="knowledge_name" class="form-control" placeholder="ระบุ" required disabled>
                                                            </label>
                              </div>
                              <div class="form-check">

                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="other_skill" id="other_skill" value="อื่นๆ/Other">อื่นๆ/Other 
                                                                        <input type="text" name="other_skill_name" id="other_skill_name" class="form-control" placeholder="ระบุ" required  disabled>
                                                                  </label>
                              </div>

                        </div>
                  </div>

                  <br>
                  <div class="row">
                        ประสบการณ์/Experience<b class="text-danger">*</b></label>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-6 ">
                              <div class="form-check">
                                    <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="inexperience" id="inexperience" value="ไม่มีประสบการณ์/Inexperience">ไม่มีประสบการณ์/Inexperience 
                                                 <input type="text" name="inexperience_com" id="inexperience_com" class="form-control" placeholder="ระบุ" required disabled>
                                                      </label>

                              </div>
                              <div class="form-check">
                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="minimum_experience" id="minimum_experience" value="ประสบการณ์ขั้นต่ำ/Minimum Experience">ประสบการณ์ขั้นต่ำ/Minimum Experience 
                                                                        <input type="text" name="minimum_experience_com" id="minimum_experience_com" class="form-control" placeholder="ระบุ" required  disabled>
                                                                             </label>
                              </div>
                              <div class="form-check">

                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="additional_experience" id="additional_experience" value="หมายเหตุเพิ่มเติม(ถ้ามี)/Additional Remark(if any)">หมายเหตุเพิ่มเติม(ถ้ามี)/Additional Remark(if any) 
                                                                        <input type="text" name="additional_com" id="additional_com" class="form-control" placeholder="ระบุ" required  disabled>
                                                                  </label>
                              </div>
                              <div class="form-check">

                                    <label class="form-check-label">
                                                                              <input type="checkbox" class="form-check-input" name="other_experience" id="other_experience" value="อื่นๆ/Other">อื่นๆ/Other 
                                                                        <input type="text" name="other_experience_com" id="other_experience_com" class="form-control" placeholder="ระบุ" required disabled>
                                                                        </label>
                              </div>
                        </div>
                  </div>

                  <br><br>
                  <div class="row">
                        <div class="col-md-3 "></div>
                        <div class="col-md-6 ">
                              <div class="form-group ">
                                    <b class="text-danger">*จำเป็นต้องเซ็นชื่อ</b>
                                    <div class="col-sm-4">

                                          <div class="sigPad">
                                                <ul class="sigNav">
                                                      <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                                      <li class="clearButton"><a href="#clear">Clear</a></li>
                                                </ul>
                                                <div class="sig sigWrapper">
                                                      <div class="typed"></div>
                                                      <canvas class="pad" width="220" height="70"></canvas>
                                                      <input type="hidden" name="signa1_requested" class="output" required>

                                                </div>
                                          </div>
                                    </div>
                                    <br>
                                    <label class="control-label">ผู้ขอจ้าง/Requested<b class="text-danger">*</b></label>                                    
                                    
                                    {{Form::text('requested','',['class'=>'form-control','id'=>'requested','required'])}}

                              </div>



                        </div>

                  </div> <br>
                  <center>
                              <strong class="text-danger">โปรดอ่าน:หากกดส่งคำร้องครั้งแรกเกิดผิดพลาด กรุณาตรวจสอบข้อมูลทั้งหมดอีกครั้งว่าถูกต้องหรือไม่เมื่อกดส่งคำร้องอีกครั้ง</strong>
                        <span id="sendData"> <input type="submit" name="submit"  class="btn btn-success" value="ส่งคำร้อง"  > </span>
                        <br>
                      


                  </center>

            </form>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>
      <script type="text/javascript">
            function sizeFrame() {
                  $("#iframeid", top.document).css({ height: 0 });
                  // กำหนดความสูงของ iframe ให้เท่ากับ 0
                  var heightDiv=$(document).height(); 
                  // หาความสูงของเพจ pagecontent.html
                  $("#iframeid", top.document).height(heightDiv); 
                  // กำหนดความสูงของ iframe ให้เท่ากับความสูงของ pagecontent.html
                  }
                  $(function(){
                            sizeFrame(); 
                            // เรียกใช้ฟังก์ขันเมื่อไฟล์ pagecontent.html โหลดเสร็จแล้ว
                            $("#iframeid").load(sizeFrame); 
                           // เรียกใช้ฟังก์ขันเมื่อ iframe โหลด ไฟล์  pagecontent.html
                  });
      </script>





      <script>
 

  
            $(document).ready(function() {
              $('.sigPad').signaturePad({drawOnly:true});
                     
            });
          







    $(document).ready(function() {    
   

      $('#permanent').click(function() {
        if ($(this).is(':checked')) {
      
        }else {
       
            $("#daily1").removeAttr("checked","checked");
            $("#monthly2").removeAttr("checked","checked");
            
        }
    });
  
  $('#apprentie').click(function() {
        if ($(this).is(':checked')) {
       
       $("#timestart1").removeAttr('disabled', 'disabled');
       $("#timeend1").removeAttr('disabled', 'disabled');
        }else {
      
       $("#timestart1").attr('disabled', 'disabled');
       $("#timeend1").attr('disabled', 'disabled');
        }
    });




  $('#subcontract').click(function() {
  
        if ($(this).is(':checked')) {
      
       $("#timestart2").removeAttr('disabled', 'disabled');
       $("#timeend2").removeAttr('disabled', 'disabled');
          
        }else {
     
       
       $("#timestart2").attr('disabled', 'disabled');
       $("#timeend2").attr('disabled', 'disabled');
        }
    });

 $('#hire').click(function() {
  
  if ($(this).is(':checked')) {
   
      $("#bec").removeAttr('disabled', 'disabled');

  }else {
   
      $("#bec").attr('disabled', 'disabled');
      document.getElementById('bec').value = "";
  }
});

 $('#substitute').click(function() {
  
  if ($(this).is(':checked')) {
   
      $("#name_substitute").removeAttr('disabled', 'disabled');
    
  }else {

      $("#name_substitute").attr('disabled', 'disabled');
      document.getElementById('name_substitute').value = "";
  }
});

 $('#other_experience').click(function() {
  
  if ($(this).is(':checked')) {
     
      $("#other_experience_com").removeAttr('disabled', 'disabled');
     
    
  }else {
    
      $("#other_experience_com").attr('disabled', 'disabled'); 
      document.getElementById('other_experience_com').value = ""; 
  }
});

 $('#additional_experience').click(function() {
  
  if ($(this).is(':checked')) {
   
      $("#additional_com").removeAttr('disabled', 'disabled');

     
  }else {

      $("#additional_com").attr('disabled', 'disabled'); 
      document.getElementById('additional_com').value = ""; 
  }
});

 $('#minimum_experience').click(function() {
  
  if ($(this).is(':checked')) {
     

       $("#minimum_experience_com").removeAttr('disabled', 'disabled');

   
  }else {

      $("#minimum_experience_com").attr('disabled', 'disabled'); 
      document.getElementById('minimum_experience_com').value = ""; 
  }
});

 $('#inexperience').click(function() {
  
  if ($(this).is(':checked')) {

      $("#inexperience_com").removeAttr('disabled', 'disabled');
           
  }else {

      $("#inexperience_com").attr('disabled', 'disabled');
      document.getElementById('inexperience_com').value = ""; 
 
  }
});
$('#other_skill').click(function() {
  
  if ($(this).is(':checked')) {

      $("#other_skill_name").removeAttr('disabled', 'disabled');

      
  }else {
   
      $("#other_skill_name").attr('disabled', 'disabled');
      document.getElementById('other_skill_name').value = "";

  }
});
$('#computer_knowledge').click(function() {
  
  if ($(this).is(':checked')) {

      $("#knowledge_name").removeAttr('disabled', 'disabled');

       
    
  }else {

      $("#knowledge_name").attr('disabled', 'disabled'); 
      document.getElementById('knowledge_name').value = "";

  }
});
$('#typing').click(function() {
  
  if ($(this).is(':checked')) {
   
      $("#typing_name").removeAttr('disabled', 'disabled');

  }else {
 
      $("#typing_name").attr('disabled', 'disabled'); 
      document.getElementById('typing_name').value = "";

  }
});
$('#foreign_languages').click(function() {
  
  if ($(this).is(':checked')) {

      $("#languages_name").removeAttr('disabled', 'disabled');
    
  }else {
     
      $("#languages_name").attr('disabled', 'disabled'); 
      document.getElementById('languages_name').value = "";
      
      
  }
});

});

      </script>

<script language="javascript">
  
            function fncSubmit()
            {
                  if(document.form1.internal_Recruit.checked == false && document.form1.external_Recruit.checked == false)
                  {
                        
                        alert('โปรดเลือกการสรรหาอย่างน้อย 1 ตัวเลือก');
                        document.form1.internal_Recruit.focus();
                        document.form1.external_Recruit.focus();
                        return false;
                  }else if( document.form1.permanent.checked == false && document.form1.apprentie.checked == false && document.form1.subcontract.checked == false){
                        alert('โปรดเลือกประเภทของการจ้างงาน/Type of Employentอย่างน้อย 1 ตัวเลือกค่ะ');
                        document.form1.permanent.focus();
                        document.form1.apprentie.focus();
                        document.form1.subcontract.focus();
                        return false;
                  }
                  else if( document.form1.hire.checked == false && document.form1.substitute.checked == false){
                        alert('โปรดเลือกประเภทของความต้องการ/Type of Rquirementอย่างน้อย 1 ตัวเลือกค่ะ');
                        document.form1.hire.focus();
                        document.form1.substitute.focus();
                        return false;
                  }
                  else if( document.form1.primary.checked == false && 
                          document.form1.high_school.checked == false &&
                          document.form1.high_vocational.checked == false &&
                          document.form1.othereducation.checked == false &&
                          document.form1.secondary.checked == false &&
                          document.form1.vocational.checked == false &&
                          document.form1.undergraduate.checked == false
                          
                          ){
                        alert('โปรดเลือก การศึกษา/Education อย่างน้อย 1 ตัวเลือกค่ะ');
                        document.form1.primary.focus();
                        document.form1.high_school.focus();
                        document.form1.high_vocational.focus();
                        document.form1.othereducation.focus();
                        document.form1.secondary.focus();
                        document.form1.vocational.focus();
                        document.form1.undergraduate.focus();
                      
                        return false;
                  }
                   else if( document.form1.foreign_languages.checked == false && 
                          document.form1.typing.checked == false &&
                          document.form1.computer_knowledge.checked == false &&
                          document.form1.other_skill.checked == false
                         
                          ){
                        alert('โปรดเลือก  ความสามารถพิเศษ/Special Skill อย่างน้อย 1 ตัวเลือกค่ะ');
                        document.form1.foreign_languages.focus();
                        document.form1.typing.focus();
                        document.form1.computer_knowledge.focus();
                        document.form1.other_skill.focus();
                        return false;
                  }  
                  else if( document.form1.inexperience.checked == false &&
                          document.form1.minimum_experience.checked == false &&
                          document.form1.additional_experience.checked == false &&
                          document.form1.other_experience.checked == false){
                        alert('โปรดเลือก   ประสบการณ์/Experience อย่างน้อย 1 ตัวเลือกค่ะ');
                          document.form1.inexperience.focus();
                          document.form1.minimum_experience.focus();
                          document.form1.additional_experience.focus();
                          document.form1.other_experience.focus();
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