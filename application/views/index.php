		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="widget google-chart">
					<header class="widget-header">
						<h4 class="widget-title">Selamat Datang <?php echo $this->session->userdata('nick') ?></h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
								<div class="col-xs-6">
									<i class="fa fa-users fa-5x"></i>
								</div>
								<div class="col-xs-6 text-right">
									<h1 class="announcement-heading"><?php echo $jml?></h1>
									<p class="announcement-text">Karyawan</p>
								</div>
								</div>
							</div>
							<a href="<?php echo base_url().'index.php/karyawan' ?>">
								<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
									Lihat Detail
									</div>
									<div class="col-xs-6 text-right">
									<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
								</div>
							</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
								<div class="col-xs-6">
									<i class="fa fa-tasks fa-5x"></i>
								</div>
								<div class="col-xs-6 text-right">
									<h1 class="announcement-heading"><?php echo $absen?></h1>
									<p class="announcement-text">Laporan</p>
								</div>
								</div>
							</div>
							<a href="<?php echo base_url().'index.php/laporan' ?>">
								<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
									Lihat Detail
									</div>
									<div class="col-xs-6 text-right">
									<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
								</div>
							</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
								<div class="col-xs-6">
									<i class="fa fa-comments fa-5x"></i>
								</div>
								<div class="col-xs-6 text-right">
									<h1 class="announcement-heading"><?php echo $izin ?></h1>
									<p class="announcement-text">Izin</p>
								</div>
								</div>
							</div>
							<a href="<?php echo base_url().'index.php/manajizin' ?>">
								<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
									Lihat Detail
									</div>
									<div class="col-xs-6 text-right">
									<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
								</div>
							</a>
							</div>
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