@extends('layouts.operate')
@section('content')


  <div class="content-wrapper">
      <div class="content container">
      <br><br><br>
      <div class="col-md-3"></div>   <div class="col-md-5">
   
    
            <div class="box box-info">
                    <div class="box-header with-border">
                      การทดลองงานระดับปฏิบัติการ
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{Form::open(['url'=>'conduct_employs','method'=>'POST'])}}
                    @csrf 
                    <div class="form-horizontal">
                      <div class="box-body">

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">ชื่อ-สกุล</label>
        
                          <div class="col-sm-7">
                              <select class="js-example-basic-single  form-control" id="country" name="id" required >
                                  <option value=""  >--เลือกชื่อพนักงาน--</option>
                                  @foreach ($employee  as $e)
                                  <option value="{{$e->nem_id}}"> {{$e->nem_thai_firstname }} {{$e->nem_thai_lastname }}</option>   
                                  @endforeach
                                  </select>
                          </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">ระดับ</label>
          
                            <div class="col-sm-7">
                                <select      name="degree" required id="2"  class=" js-example-basic-single  form-control">
                                    <option value=""  >--ระดับ--</option>
                                    <option value= 0  >ระดับปฏิบัติการ</option>
                                    <option value= 1 >ระดับผู้บังคับบัญชา</option>
                                    </select>
                            </div>
                          </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                      
                        <button type="submit" class="btn btn-info pull-right">ตกลง</button>
                        {{Form::close()}}
                        <a href="{{url('/home') }}" class="btn btn-default" >ยกเลิก</a> 
                      </div>
                    
                      <!-- /.box-footer -->
                    </div>
                  </div>
                </div>
          </div>
     </div>

  @endsection