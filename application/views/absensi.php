
<?php
  $tanggalbiasa = date('Y-m-d');
  $tgl = tanggal_indo(date('Y-m-d')); 
?>
<div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1><?php echo $judul ?> <small>List <?php echo $judul ?></small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-check"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->


<div class="row">
    
  <div class="col-lg-8">      
      <div class="widget google-chart">
        <header class="widget-header">
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Absensi Karyawan</h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
        <table class="table table-striped dataTable table-bordered">
          <thead>
            <td>ID</td>
            <td>Nama</td>
            <td>Tanggal Join</td>
            <td>Status</td>
            <td>Aksi</td>
          </thead>
            <?php
              foreach ($karyawan as $k) {
                echo "<thead>";
                echo '<td>'.$k->id_kary.'</td>';
                echo '<td>'.$k->nama.'</td>';
                echo '<td>'.$k->tgl_join.'</td>';
                echo '<td>'.$k->status.'</td>';
                if ($k->status == 'Enable') {
                  echo "<td>".anchor("absen/checkin/".$k->id_tbl."/".$tanggalbiasa, "Check In", array('class'=>'btn btn-primary'))." ".anchor("absen/checkout/".$k->id_tbl."/".$tanggalbiasa, "Check Out", array('class'=>'btn btn-success'))."</td>";
                } else {
                  echo "<td>Status Disable Tidak bisa Absen </td>";
                }
                echo "</thead>";
              }
            ?>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-watch"></i> <?php echo $tgl ?></h3>
      </div>
      <div class="panel-body">
          <h1 id="time"></h1>
      </div>
    </div>
  </div>

  <div class="col-lg-8">      
      <div class="widget google-chart">
        <header class="widget-header">
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Data Absensi <?php echo $tgl?></h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
        <table class="table table-striped dataTable table-bordered">
          <thead>
            <td>ID</td>
            <td>Nama</td>
            <td>Tanggal Absen</td>
            <td>Check In</td>
            <td>Check Out</td>
            <td>Total Jam</td>
            <td>Over Time</td>
          </thead>
            <?php
              foreach ($absensi as $a) {
                echo "<thead>";
                echo '<td>'.$a->id_kary.'</td>';
                echo '<td>'.$a->nama.'</td>';
                echo '<td>'.$a->tgl.'</td>';
                echo '<td>'.$a->masuk.'</td>';
                echo '<td>'.$a->keluar.'</td>';
                $total = $a->keluar - $a->masuk;
                $Ov = $total - 6;
                echo '<td>'.$total.' Jam</td>';
                echo '<td>'.$Ov.' Jam</td>';
                echo "</thead>";
              }
            ?>
        </table>
      </div>
    </div>
  </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

