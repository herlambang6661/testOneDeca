<?php

$tanggalbiasa = date('Y-m-d');
$tgl = tanggal_indo(date('Y-m-d')); 
$id = $this->session->userdata('id_kary');
?>
  <body>

    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-info">
        <div class="panel-heading text-center">
          <h3>SELAMAT DATANG <?php echo $this->session->userdata('nama') ?></h3>
          <h4><?php echo $tgl ?></h4>
          <h1 id="time"></h1>

        </div>
        <div class="panel-body">
        
            <div class="alert alert-success alert-dismissable text-center">
              <small>Absen Keluar (Check Out) hanya bisa dilakukan jika sudah 6 jam setelah anda Check In</small>
            </div>
            <?php 
              $vl = $this->session->userdata('valid');
              $ck = $this->session->userdata('checkout');
              $jammasuk = $this->session->userdata('jammasuk');
              if ($vl == 'belum') {
            ?>
              <div class="col-lg-6">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <a href="absensi/inputAbsen/<?php echo $id ?>/<?php echo $tanggalbiasa?>/<?php echo date("H:i:s")?>">
                    <div class="row">
                      <div class="col-xs-2 col-xs-offset-3">
                        <i class="fa fa-check-square fa-5x"></i>
                      </div>
                    </div>
                  </div>
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          Check In
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              
              <div class="col-lg-6">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2 col-xs-offset-3">
                          <i class="fa fa-minus-circle fa-5x"></i>
                        </div>
                      </div>
                    </div>
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            Anda Belum Absen Masuk
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

              <?php }
                else {
              ?>
              <div class="col-lg-6">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-2 col-xs-offset-3">
                        <i class="fa fa-check-square fa-5x"></i>
                      </div>
                    </div>
                  </div>
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          Anda Sudah Absen Hari Ini
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              
              <?php
                  if ($ck == 'boleh') {
                ?>
                
                <div class="col-lg-6">
                      <div class="panel panel-warning">
                        <div class="panel-heading"><a href="absensi/inputAbsenKeluar/<?php echo $id ?>/<?php echo $tanggalbiasa?>/<?php echo date("H:i:s")?>/<?php echo $jammasuk?>">
                          <div class="row">
                            <div class="col-xs-2 col-xs-offset-3">
                              <i class="fa fa-check fa-5x"></i>
                            </div>
                          </div>
                        </div>
      
                          <div class="panel-footer announcement-bottom">
                            <div class="row">
                              <div class="col-xs-12 text-center">
                                Check Out
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                <?php
                  } else {
                ?>

                <div class="col-lg-6">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2 col-xs-offset-3">
                          <i class="fa fa-minus-circle fa-5x"></i>
                        </div>
                      </div>
                    </div>
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            Belum Waktunya CheckOut
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <?php
                  }
                ?>
              

                <?php } ?>


              <div class="col-lg-12">
                <a href="<?php echo base_url().'index.php/login/logout' ?>" class="btn btn-info btn-block">Kembali</a>
                <a href="<?php echo base_url().'index.php/izin' ?>" class="btn btn-default btn-block">Pengajuan Izin</a>
              </div>
        </div>
      </div>
    </div>

