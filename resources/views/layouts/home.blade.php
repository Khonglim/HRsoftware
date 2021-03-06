<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ngg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="{{ asset('new/css/bootstrap.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/style.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/prettyPhoto.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/owl.carousel.css') }}"   rel='stylesheet' type='text/css'  media="all" />
	<link href="{{ asset('new/css/owl.theme.css') }}"   rel='stylesheet' type='text/css' media="all" />
	<link href="{{ asset('new/css/fontawesome-all.css') }}"   rel='stylesheet' />
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
  <style>
  body {
    font-family: 'Prompt', sans-serif;
   
  }
  </style>


</head>

<body >
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts_agile">
	
			<div class="log">
		
				<h5>
					<a class="sign" href="{{url('/login') }}" >
						<i class="fas fa-user"></i> Login</a>
				</h5>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="{{url('/') }}">
					<img src="{{URL::asset('img/NGG-10.jpg')}}"  width="80px" height="80px"> </a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
							<li class="nav-item active">
									<a class="nav-link cool" href="{{url('/') }}">หน้าแรก</a>
								</li>
						<li class="nav-item ">
							<a class="nav-link cool" href="{{url('employee/create') }}">สมัครงาน
							
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="{{url('/testto') }}">ทำแบบทดสอบ MBTI และ DISC</a>
						</li>
						<li class="nav-item">
								<a class="nav-link cool" href="{{url('/userlogin') }}">ทำแบบประเมิน360</a>
							</li>
							<li class="nav-item">
									<a class="nav-link cool" href="{{url('/manpowercreate') }}">คำขอกำลังคน</a>
								</li>
					</ul>

				</div>
				
			</nav>

		</div>
	</header>
	<main>
		@yield('content')
	</main>


<br><br><br>


			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2018 NGG:
			  <a href="#"> Version 2.4.0</a>
			 
			  <p class="text-danger">ปรับปรุงระบบทุก เวลา 23.00-00.00น.</p>
			</div>
			<!-- Copyright -->
		
		  </footer>
	<script src="new/js/jquery-2.2.3.min.js"></script>
	<script src="new/js/bootstrap.js"></script>
	<script type="text/javascript">
	
	function iframeHeight(obj){
    the_height= obj.contentWindow.document.body.offsetHeight;
    obj.height=the_height+10;
}
		</script>
</body>

</html>