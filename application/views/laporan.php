
<?php
  $tanggalbiasa = date('Y-m-d');
  $tgl = tanggal_indo(date('Y-m-d')); 
?>

<div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1>Laporan <small> Tanggal : <?php echo $tgl ?></small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-print"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12 col-sm-12">
            <div class="col-md-8 col-sm-8">    
            <?php
                $jam = date("H:i:s");
                if ($jam >= "17:00:00" || $jam <= "08:00:00") {
                ?>
                
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Laporan <?php echo $tgl ?>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped dataTable table-bordered">
                            <thead>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Tanggal Join</td>
                                <td>Jam Masuk</td>
                                <td>Jam Keluar</td>
                                <td>Total Kerja</td>
                                <td>Over Time</td>
                            </thead>
                                <?php
                                foreach ($laporan as $l) {
                                    echo "<thead>";
                                    echo '<td>'.$l->id_kary.'</td>';
                                    echo '<td>'.$l->nama.'</td>';
                                    echo '<td>'.$l->tgl_join.'</td>';
                                    echo '<td>'.$l->masuk.'</td>';
                                    echo '<td>'.$l->keluar.'</td>';
                                    echo '<td>'.$l->total.' Jam</td>';
                                    echo '<td>'.$l->overtime.' Jam</td>';
                                    echo "</thead>";
                                }
                                ?>
                        </table>
                    </div>
                </div>
                
                <?php
                } else {
                ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Mohon Maaf belum waktu nya merekap data Laporan. Data Laporan bisa ditampilkan hanya setelah jam 17:00 atau sebelum jam 08:00
                    </div>
                    <a href="#">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">
                                    Klik disini Untuk Refresh
                                </div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-recycle"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                }
                
            ?>
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
    
    
</div><!-- .row -->


	</section><!-- #dash-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<!--========== END app main -->