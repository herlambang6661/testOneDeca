
<?php
  $tanggalbiasa = date('Y-m-d');
  $tgl = tanggal_indo(date('Y-m-d')); 
?>
<div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1><?php echo $judul ?> <small>Pengajuan <?php echo $judul ?></small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-check"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->


<div class="row">
    
  <div class="col-lg-8">      
      <div class="widget google-chart">
        <header class="widget-header">
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Data Pengajuan Izin</h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
        <table class="table table-striped dataTable table-bordered">
          <thead>
            <td>ID</td>
            <td>Nama</td>
            <td>Izin</td>
            <td>Tanggal</td>
            <td>Keterangan</td>
            <td>Proses</td>
            <td>Aksi</td>
          </thead>
            <?php
              foreach ($izin as $k) {
                echo "<thead>";
                echo '<td>'.$k->id_kary.'</td>';
                echo '<td>'.$k->nama.'</td>';
                echo '<td>'.$k->izin.'</td>';
                echo '<td>'.$k->tgl.'</td>';
                echo '<td>'.$k->keterangan.'</td>';
                if ($k->proses == 'Accept') {
                  echo '<td class="text-success">'.$k->proses.'</td>';
                } elseif ($k->proses == 'Denied') {
                  echo '<td class="text-danger">'.$k->proses.'</td>';
                } else {
                  echo '<td class="text-warning">'.$k->proses.'</td>';
                }
                echo "<td>".anchor("manajizin/accept/".$k->id_tbl, "Accept", array('class'=>'btn btn-primary'))." ".anchor("manajizin/denied/".$k->id_tbl, "Denied", array('class'=>'btn btn-danger'))."";
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
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

