
  <body>

    <div class="col-md-8 col-md-offset-2 bg">
      <div class="panel panel-info">
        <div class="panel-heading text-center">
          <h3>SELAMAT DATANG DI APLIKASI ABSENSI KARYAWAN</h3>
          <h4>SILAHKAN PILIH OPSI DIBAWAH</h4>
        </div>
        <div class="panel-body">

          <div class="alert alert-default alert-dismissable text-center">
            <?php echo $this->session->flashdata('msg');?>
          </div>

          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading"><a href="#" data-toggle="modal" data-target="#absen">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-3">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                </div>
              </div>

                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">
                      Proses Absensi
                    </div>
                    <div class="col-xs-2 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


            <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading"><a href="#" data-toggle="modal" data-target="#user">
                  <div class="row">
                    <div class="col-xs-2 col-xs-offset-3">
                      <i class="fa fa-users fa-5x"></i>
                    </div>
                  </div>
                </div>

                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-12">
                        Data Absensi
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>


              <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><a href="#" data-toggle="modal" data-target="#admin">
                    <div class="row">
                      <div class="col-xs-2 col-xs-offset-3">
                        <i class="fa fa-user fa-5x"></i>
                      </div>
                    </div>
                  </div>

                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-10">
                          Login Admin
                        </div>
                        <div class="col-xs-2 text-right">
                          <i class="fa fa-arrow-circle-right"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>


        </div>
      </div>
    </div>

    <!-- MODAL ABSEN -->
    <div id="user" class="modal fade" role="dialog">
  		<div class="modal-dialog">
  			<!-- konten modal-->
  			<div class="modal-content">
                  <!-- footer modal -->
                  
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Tutup &times;</button>
                </div>
                <div class="modal-body">
                </div>
  				<div class="modal-footer">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            Silahkan Login sebagai user
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('dashboardKaryawan/masukkaryawan'); ?>
                            <h4 class="text-center title-login"></h4>
                                <div class="alert alert-success alert-dismissable text-center">
                                    Username : user1 | Password : user1
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" />
                                </div>
                                <input type="submit" class="btn btn-block btn-custom-green" name="login" value="LOGIN" />
                            <?php echo form_close(); ?>
                        </div>
                        </div>
                    </div>
  				</div>
  			</div>
  		</div>
  	</div>
    <!-- MODAL -->
    <div id="admin" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
          <!-- footer modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">Tutup &times;</button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading text-center">
                      Silahkan Login
                  </div>
                  <div class="panel-body">

                      <?php echo form_open('login/authadmin'); ?>
                      
                      <h4 class="text-center title-login"></h4>
                          <div class="alert alert-success alert-dismissable text-center">
                              Username : admin | Password : admin
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>

                          <div class="form-group">
                              <input type="password" class="form-control" name="password" placeholder="Password" />
                          </div>
                          <input type="submit" class="btn btn-block btn-custom-green" name="login" value="LOGIN" />
                      
                      <?php echo form_close(); ?>

                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
      
      
    <!-- MODAL ABSEN -->
    <div id="absen" class="modal fade" role="dialog">
  		<div class="modal-dialog">
  			<!-- konten modal-->
  			<div class="modal-content">
                  <!-- footer modal -->
                  
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Tutup &times;</button>
                </div>
                <div class="modal-body">
                </div>
  				<div class="modal-footer">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            Silahkan Login sebagai user
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('login/authkaryawan'); ?>
                            <h4 class="text-center title-login"></h4>
                                <div class="alert alert-success alert-dismissable text-center">
                                    Username : user1 | Password : user1
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" />
                                </div>
                                <input type="submit" class="btn btn-block btn-custom-green" name="login" value="LOGIN" />
                            <?php echo form_close(); ?>
                        </div>
                        </div>
                    </div>
  				</div>
  			</div>
  		</div>
  	</div>
