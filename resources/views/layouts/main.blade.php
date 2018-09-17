<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>NGG</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Prompt">
<style>
body {
  font-family: 'Prompt', sans-serif;
 
}
        <style>
            body {
                     
                      font-size: 15px;
                  }
              </style>
        
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
    <div id="main">
            <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/home') }}" class="logo">
                <span class="logo-mini"></span>
                <span class="logo-lg">HR Ngg</span>
              </a>
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li class="dropdown tasks-menu">
                    <ul class="dropdown-menu">
                    </ul>
                  </li>
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="{{URL::asset('dist/img/user2-160x160.png')}}" class="user-image" alt="User Image" >
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                      
                        <img src="{{URL::asset('dist/img/user2-160x160.png')}}" class="user-image" alt="User Image">
                        <p>
                          {{ Auth::user()->name }} - HR Software
                          <small>2018</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                      
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                         
                        </div>
                        <div class="pull-right">
                         <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                              </form>
                        </div>
                      </li>
                      
                    </ul>
                  </li>


                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <aside class="main-sidebar">
          
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="sidebar">
              <!-- Sidebar Menu -->
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header"><center>เมนู</center></li>
                <!-- Optionally, you can add icons to the links -->
                @if(auth()->user()->isAdmin == 1)
                <li class="active"  ><a href="{{url('/home') }}" ><i class="  fa fa-tachometer"></i> <span>หน้าแรก</span></a></li>
                <li class="active"  ><a href="{{url('/employee')}}"><i class="glyphicon glyphicon-user"></i> <span>ข้อมูลพนักงาน</span></a></li>
                <li class="active"  ><a href="{{url('/interview') }}"><i class="glyphicon glyphicon-user"></i> <span>แบบประเมินผลสัมภาษณ์</span></a></li>
           
                <li class="treeview">
                  <a href="#"><i class="fa fa-angle-double-right"></i> <span>สรุปผลพนักงาน</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/summbti') }}">รวม MBTI บุคคล</a></li>
                    <li><a href="{{url('/sumdisc') }}">รวม DISC บุคคล</a></li>
                    <li><a href="{{url('/summeva') }}">สรุปผลประเมิน</a></li>
                  </ul>
                </li>
              
                <li class="treeview">
                    <a href="#"><i class="fa fa-angle-double-right"></i> <span>	แบบประเมินผลการปฏิบัติงาน</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{url('/index_satff') }}">ระดับปฏิบัติการ</a></li>
                      <li><a href="{{url('/index_sup') }}">ระดับผู้บังคับบัญชา</a></li>
                     
                    </ul>
                  </li>



                <li class="active"  ><a href="{{url('/con_all') }}"><i class="fa fa-book"></i> <span>สรุปผลรวม</span></a></li>
                @endif
                @if(auth()->user()->isAdmin == 0)
                <li class="active"  ><a href="{{url('/evatesting') }}"><i class="fa fa-book"></i> <span>Evaluation Testing</span></a></li>
               @endif
              

               
           
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}" defer></script>
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" defer></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}" defer></script>
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}" defer></script>
  <script src="{{ asset('bower_components/PACE/pace.min.js') }}" defer></script>
  <script src="{{ asset('dist/js/adminlte.min.js') }}" defer></script>
  <script src="{{ asset('dist/js/demo.js') }}" defer></script>
  <script src="{{ asset('js/jquery.simple.timer.js') }}" defer></script>
  <script>
    $(function () {
      $('#company').DataTable()
      $('#department').DataTable()
      $('#position').DataTable()
      $('#employee').DataTable()
      $('#testmbti').DataTable()
      $('#conall').DataTable()
    });
  </script>
  
  
  <script type="text/javascript">
      $(document).ajaxStart(function() { Pace.restart(); }); 

 
  </script>
  






















</body>
</html>
