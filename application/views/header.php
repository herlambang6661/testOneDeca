<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url('assets/assets/images/logo.png');?>">
	<title><?php echo $judul ?> - Aplikasi Absensi</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/bower/font-awesome/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css');?>">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/bower/animate.css/animate.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/bower/fullcalendar/dist/fullcalendar.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/core.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/app.css');?>">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="<?php echo base_url('assets/libs/bower/breakpoints.js/dist/breakpoints.min.js');?>"></script>
	<script>
		Breakpoints();
  </script>
  
  <script type="text/javascript">
            function showTime() {
              var a_p = "";
              var today = new Date();
              var curr_hour = today.getHours();
              var curr_minute = today.getMinutes();
              var curr_second = today.getSeconds();   

              if (curr_hour<12) {
                a_p = "AM";
              }else{
                a_p = "PM";
              }

              if (curr_hour == 0) {
                curr_hour=12;
              } 
              if (curr_hour==12) {
                curr_hour=curr_hour-12;
              }

              curr_hour = checkTime(curr_hour);
              curr_minute = checkTime(curr_minute);
              curr_second = checkTime(curr_second);

              document.getElementById('time').innerHTML = curr_hour+" : "+curr_minute+" : "+curr_second+" "+a_p;
            }

            function checkTime(i) {
              if (i<10) {
                i = "0" + i;
              }
              return i;
            }
            setInterval(showTime, 500);
          </script>
  
</head>
	
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->
  <?php
  
  date_default_timezone_set('Asia/Jakarta');
  
  function tanggal_indo($tanggal)
  {
    
    $bulan = array (1 =>   
      'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
  $split = explode('-', $tanggal);
  return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];    
  }
  ?>
<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <a href="<?php echo base_url().'index.php' ?>" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">Absensi</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float"><?php echo $judul ?></h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Request Izin<span class="label label-primary">3</span></a></li>
            <li><a href="<?php echo base_url().'index.php/login/logout' ?>"><i class="zmdi m-r-md zmdi-hc-lg zmdi-power-off"></i>Logout</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url('assets/assets/images/111.jpg') ?>" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username"><?php echo $this->session->userdata('nick') ?></a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Web Developer</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="<?php echo base_url().'index.php/home' ?>">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="<?php echo base_url().'index.php/login/logout' ?>">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        
        <li>
          <a href="<?php echo base_url().'index.php/home' ?>">
            <i class="fa fa-dashboard"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'index.php/karyawan' ?>">
            <i class="fa fa-users"></i>
            <span class="menu-text">Karyawan</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'index.php/absensi' ?>">
            <i class="fa fa-check"></i>
            <span class="menu-text">Absensi</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'index.php/ManajIzin' ?>">
            <i class="fa fa-archive"></i>
            <span class="menu-text">Izin Cuti</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'index.php/laporan' ?>">
            <i class="fa fa-print"></i>
            <span class="menu-text">Laporan</span>
          </a>
        </li>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">