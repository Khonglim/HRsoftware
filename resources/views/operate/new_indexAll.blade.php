@extends('layouts.operate') 
@section('content')

<div class="content-wrapper">
      <div class="content container">
               
            <div class="box box-danger">
                  <div class="box-header with-border">
                        <h3 class="box-title">ประเมินผลการทดลองงาน(สำหรับผู้ประเมินครั้งแรกเท่านั้น)</h3>
                  </div>
                  <div class="form-horizontal">
                        <div class="box-body">
                              {{Form::open(['url'=>'Operate','name'=>'frmMain','id'=>'inviterSave' ])}} 
                              @csrf
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ค้นหาชื่อในระบบ: </label>
                                    <div class="col-sm-4">
                                          <select class="js-example-basic-single  form-control" id="country" name="id" required OnChange="resutName(this.value);">
                                                                        <option value=""  >--เลือกชื่อพนักงาน--</option>
                                                                        @foreach ($employee  as $e)
                                          <option value="{{$e->nem_thai_firstname}} {{$e->nem_thai_lastname }}|{{$e->nem_code}}|{{$e->nps_name}}|{{$e->ndp_name}}/{{$e->nst_name}}|{{$e->ncp_name}}|{{$e->nlv_name}}|{{$e->nem_id}}"> {{$e->nem_thai_firstname }} {{$e->nem_thai_lastname }}</option>   
                                                                        @endforeach
                                                                        </select>
                                    </div>
                                    <input type="hidden" name="id_employ" id="id_employ">
                                    <label class="col-sm-2 control-label">บริษัท:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textCompany" readonly>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ชื่อ-สกุล:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textName" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">รหัสพนักงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textNem_code" readonly>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ตำแหน่ง:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textPosition" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">แผนก/ฝ่าย:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textDepartment" readonly>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">วันเริ่มงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="dateStart2" id="dateStart2" class="form-control" autocomplete="off"    required onchange="document.getElementById('startrate').value=document.getElementById('dateStart2').value"/>
                                    </div>
                                    <label class="col-sm-2 control-label">ครบการทดลองงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="dateEnd2" id="dateEnd2" class="form-control" autocomplete="off"  required/>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">จำนวนวัน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay2" id="totolDay2" class="form-control"  readonly/>
                                    </div>
                                    <label class="col-sm-2 control-label">ระดับ:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="textDegree" class="form-control"  readonly/>
                                    </div>
                              </div>
                              <div class="form-group">

                                    <label class="col-sm-2 control-label">ประเมินครั้งที่ 1 : วันที่ :</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay_60" id="totolDay_60" class="form-control" autocomplete="off"  />
                                    </div>
                                    <label class="col-sm-2 control-label">  ประเมินครั้งที่ 2 :  วันที่:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay_90" id="totolDay_90" class="form-control" autocomplete="off" />
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ระดับ</label>
                                    <div class="col-sm-4">
                                          <select name="degree_en" id="degree" class="form-control" required>
                                                      <option value="">เลือก</option>
                                                      <option value="0">ปฏิบัติการ</option>
                                                      <option value="1">ผู้บังคับัญชา</option>

                                              </select>
                                    </div>
                                  
                              </div>
                              <center> <span id="sendDataSave"><button type="submit" class="btn btn-info ">บันทึก</button>   </span>     </center>
                              <input type="hidden"  name="dateC"  id="dateC" value="<?php echo date("d/m/Y");?>"/>
                              {{Form::close()}}
                        </div>
                  </div>
            </div>
      </div>
</div>





<script language="JavaScript">
      function resutName(strCusName)
            {
                        frmMain.textName.value = strCusName.split("|")[0];
                        frmMain.textNem_code.value = strCusName.split("|")[1];
                        frmMain.textPosition.value = strCusName.split("|")[2];
                        frmMain.textDepartment.value = strCusName.split("|")[3];
                        frmMain.textCompany.value = strCusName.split("|")[4];
                        frmMain.textDegree.value = strCusName.split("|")[5];       
                        frmMain.id_employ.value = strCusName.split("|")[6];        

            }

        $("#inviterSave").submit(function(){    
        
        $("#sendDataSave").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });
</script>
@endsection