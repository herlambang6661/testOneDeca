
<?php
  $tanggalbiasa = date('Y-m-d');
  $tgl = tanggal_indo(date('Y-m-d')); 
?>

<div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1>Selamat Datang <small> <?php echo $this->session->userdata('nama') ?></small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-user"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12 col-sm-12">
            <div class="col-md-8 col-sm-8"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Absen <?php echo $tgl ?>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped dataTable table-bordered">
                            <thead>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Jam Masuk</td>
                                <td>Jam Keluar</td>
                            </thead>
                                <?php
                                foreach ($lihatkaryawan as $l) {
                                    echo "<thead>";
                                    echo '<td>'.$l->id_kary.'</td>';
                                    echo '<td>'.$l->nama.'</td>';
                                    echo '<td>'.$l->masuk.'</td>';
                                    echo '<td>'.$l->keluar.'</td>';
                                    echo "</thead>";
                                }
                                ?>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-watch"></i> WAKTU SEKARANG</h3>
                    </div>
                    <div class="panel-body">
                        <h1 id="time"></h1>
                    </div>
                </div>
            </div>
        </div><!-- .widget -->
    </div>
    <div class="col-md-12 col-sm-12">
            <div class="col-md-8 col-sm-8"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Izin
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped dataTable table-bordered">
                            <thead>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Tanggal</td>
                                <td>Izin</td>
                                <td>Status</td>
                            </thead>
                                <?php
                                foreach ($lihatizin as $l) {
                                    echo "<thead>";
                                    echo '<td>'.$l->id_kary.'</td>';
                                    echo '<td>'.$l->nama.'</td>';
                                    echo '<td>'.$l->tgl.'</td>';
                                    echo '<td>'.$l->izin.'</td>';
                                    if ($l->proses == "Accept") {
                                        echo '<td class="text-success">'.$l->proses.'</td>';
                                    }elseif ($l->proses == "Denied") {
                                        echo '<td class="text-Danger">'.$l->proses.'</td>';
                                    }else {
                                        echo '<td class="text-warning">'.$l->proses.'</td>';                                        
                                    }
                                    echo "</thead>";
                                }
                                ?>
                        </table>
                    </div>
                </div>
                
            </div>
    </div>
    
    
</div><!-- .row -->