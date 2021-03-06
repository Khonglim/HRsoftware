@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-xs-12">

        <a href="employee/create" class="btn btn-success"><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>

        <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
           <center> (หมายเหตุ:ในส่วนดูข้อมูลล่าสุด เวลาอัพเดทเมื่อกดดูPDFเท่านั้น)</center>   
            <table id="employee" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>วันที่สมัคร ปี-เดือน-วัน</th>
                  <th>ชื่อ</th>
                  <th>นามสกุล</th>
                  <th>ตำแหน่ง</th>
                  <th>เพิ่มเติ่ม</th>
                  <th>การดูข้อมูลครั้งล่าสุด</th>
                  <th>สถานะ</th>
                </tr>
              </thead>
              <tbody>
                @forelse($personal as $l) @if($l['enable']==1)
                <tr>
                  <td  style="width: 30px; "> {{$l['created_at']}} นาที </td>
                  <td  style="width: 30px; "> {{$l['fronname']}} {{$l['name']}} </td>
                  <td  style="width: 30px; "> {{$l['lastname']}} </td>
                  <td  style="width: 30px; "> {{$l['positionngg']}} </td>
                  <td  style="width: 30px; ">
                    <a href="{{'employee/'.$l['id']}}" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></a>
                    <a href="{{'employee/'.$l['id'].'/edit'}}" class="btn btn-warning btn-xs "><i class="fa fa-pencil"></i></a>
                    <a href="{{url('pdfemployee/'.$l['id'])}}" class="btn btn-success btn-xs "><i class="fa fa-download"></i></a>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$l['id']}}"><i class=" fa fa-trash"></i></button>
                    <div id="myModal{{$l['id']}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">ลบข้อมูล</h4>
                          </div>
                          <div class="modal-body">
                            {{ Form::open(['route' => ['employee.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                            <input type="hidden" name="_method" value="delete" />
                            <p>คุณต้องการลบ{{$l['name']}}ใช่หรือไม่!!!!</p>
                          </div>
                          <div class="modal-footer">
                            <button type="summit" class="btn btn-danger">ลบ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                          </div>
                          {{ Form::close() }}
                        </div>

                      </div>
                    </div>
                  </td>
                  <td  style="width: 30px; "> {{$l['updated_at']}} นาที </td>
                  <td  style="width: 30px; ">@if($l['degree']==1) 
                   
                      <b class="text-success">เปิดแล้ว</b>
                    @else

                    <b class="text-danger">ยังไม่ได้เปิด</b>
                  
                  
                  @endif
                  </td>
                </tr>
                @endif @empty
                <tr>
                  <td colspan="6"> No data !!</td>
                </tr>
                @endforelse
              </tbody>
              <tfoot>
                <tr>
                  <th>วันที่สมัคร ปี-เดือน-วัน</th>
                  <th>ชื่อ</th>
                  <th>นามสกุล</th>
                  <th>ตำแหน่ง</th>
                  <th>เพิ่มเติ่ม</th>
                  <th>การดูข้อมูลครั้งล่าสุด</th>
                  <th>สถานะ</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection