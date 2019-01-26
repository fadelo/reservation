<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Reservation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{ asset('storage/bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href= {{ asset('storage/bower_components/font-awesome/css/font-awesome.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href= {{ asset('storage/bower_components/Ionicons/css/ionicons.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href= {{ asset('storage/dist/css/AdminLTE.min.css') }}>
  <!-- Mon style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/myStyle.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href= {{ asset('storage/dist/css/skins/_all-skins.min.css') }}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ route('index_path') }}" class="navbar-brand"><b>e-Réservation</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li></li>
            <li></li>
            <li></li>
            <li class="active"><a href="{{ route('index_path') }}">Acceuil <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ route('about_path') }}">A propos</a></li>
            <li><a href="{{ route('faq_path') }}">FAQ</a></li>
            <li><a href="{{ route('contact_path') }}">Contact</a></li>
            
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            @if(Auth::user())
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->nom.' '.Auth::user()->prenom }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashboard fa-fw"></i> Mon compte</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
                </ul>
              </li>
            
            @else
              <li>
                <a href="{{  route('login') }}">Login</a>
              </li>
            
            @endif
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- carousel -->
  <div class="content-wrapper" style="background: white">
    @yield('carousel')
    <div class="container">
      <!-- Content Header (Page header) -->
     <!-- <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>  -->

      <!-- Main content -->
      <section class="content">
         @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <!--<div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>-->
      <div align="center">
        <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io">e-Réservation</a>.</strong> 
        <p>Projet de soutenance de EL-HADJ SEIDOU Fadel Sylla et HOUNDETON Napoléon.</p>
      </div>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src= {{ asset('storage/bower_components/jquery/dist/jquery.min.js') }}></script>
<!-- Bootstrap 3.3.7 -->
<script src= {{ asset('storage/bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
<!-- SlimScroll -->
<script src= {{ asset('storage/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}></script>
<!-- FastClick -->
<script src={{ asset('storage/bower_components/fastclick/lib/fastclick.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('storage/dist/js/adminlte.min.js') }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('storage/dist/js/demo.js') }}></script>
</body>
</html>
