
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
  <script type="text/javascript">
    function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();

    // if (curr_hour<12) {
    //     a_p = "AM";
    // }else{
    //     a_p = "PM";
    // }

    // if (curr_hour == 0) {
    //     curr_hour=12;
    // } 
    // if (curr_hour==12) {
    //     curr_hour=curr_hour-12;
    // }

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
  
	
<body>
<!--============= start main area -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
        