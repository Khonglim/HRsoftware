@extends('layouts.home')
@section('content')

<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <section class="probootstrap-cover">
      <div class="container">
        <div class="row probootstrap-vh-100 align-items-center text-center">
          <div class="col-sm">
            <div class="probootstrap-text">
              <h1 class="probootstrap-heading text-white mb-4"> ขั้นตอนการสมัรงาน.</h1>
              <div class="probootstrap-subheading mb-5">
                <p class="h4 font-weight-normal text-light"> Cien Sesto NGGTP TAI Xian  UW  Other</p>
              </div>
              <p>  <a href="{{url('employee/create') }}" class="btn btn-success" >สมัครงาน</a></p>
                <p>   <a href="{{url('/testto') }}" class="btn btn-primary" >ทำแบบทดสอบประเมิน MBTI</a></p>
                  <p>   <a href="{{url('/testtoo') }}" class="btn btn-info" >ทำแบบทดสอบประเมิน DISC</a></p>
             <p> <a href="{{url('/interview') }}" class="btn btn-warning" >ประเมินผู้ถูกสัมภาษณ์</a> </p>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              




            </div>
          </div>
        </div>
      </div>
    </section>
</header> 



@endsection