
<?php
  $tanggalbiasa = date('Y-m-d');
  $tgl = tanggal_indo(date('Y-m-d')); 
?>
      <div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1><?php echo $judul ?> <small>List <?php echo $judul ?></small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-users"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->


<div class="row">
  <div class="col-lg-8">      
      <div class="widget google-chart">
        <header class="widget-header">
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Data Karyawan yang terdaftar</h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
          <a href="<?php echo base_url().'index.php/karyawan/tambah' ?>" class="btn btn-primary">Tambah Karyawan</a><br><br>
        <table class="table table-striped dataTable table-bordered">
          <thead>
            <td>ID</td>
            <td>Nama</td>
            <td>Tanggal Join</td>
            <td>Status</td>
            <td>Username</td>
            <td>Paswword</td>
            <td>Aksi</td>
          </thead>
            <?php
              foreach ($karyawan as $k) {
                echo "<thead>";
                echo '<td>'.$k->id_kary.'</td>';
                echo '<td>'.$k->nama.'</td>';
                echo '<td>'.$k->tgl_join.'</td>';
                echo '<td>'.$k->status.'</td>';
                echo '<td>'.$k->username.'</td>';
                echo '<td>'.$k->password.'</td>';
                if ($k->status == 'Enable') {
                  echo "<td>".anchor("karyawan/disable/".$k->id_tbl, "<i class='fa fa-power-off'></i>", array('class'=>'btn btn-dark', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'NON AKTIFKAN KARYAWAN'))." ".anchor("karyawan/edit/".$k->id_tbl, "<i class='fa fa-edit'></i>", array('class'=>'btn btn-info', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'EDIT KARYAWAN'))." ".anchor("karyawan/hapus/".$k->id_tbl, "<i class='fa fa-trash'></i>", array('class'=>'btn btn-danger', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'HAPUS KARYAWAN'))." ";
                } else {
                  echo "<td>".anchor("karyawan/enable/".$k->id_tbl, "<i class='fa fa-plug'></i>", array('class'=>'btn btn-success', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'AKTIFKAN KARYAWAN'))." ".anchor("karyawan/edit/".$k->id_tbl, "<i class='fa fa-edit'></i>", array('class'=>'btn btn-info', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'EDIT KARYAWAN'))." ".anchor("karyawan/hapus/".$k->id_tbl, "<i class='fa fa-trash'></i>", array('class'=>'btn btn-danger', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'data-original-title'=>'HAPUS KARYAWAN'))." ";
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
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

