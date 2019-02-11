
      <div id="page-wrapper">

<div class="row">
  <div class="col-lg-12">
    <h1><?php echo $judul ?></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-users"></i> <?php echo $judul ?></li>
    </ol>
  </div>
</div><!-- /.row -->


<div class="row">
  <div class="col-lg-12">      
      <div class="widget google-chart">
        <header class="widget-header">
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Input Data Karyawan</h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
          <?php echo form_open('karyawan/tambah_simpan'); ?>
            <div class="form-group">
              <label for="id">ID Karyawan</label>
              <input type="text" class="form-control" placeholder="masukkan ID karyawan" name="ID">
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input type="text" class="form-control" placeholder="masukkan nama karyawan" name="nama">
            </div>
            <div class="form-group">
              <label for="tgl">Tanggal Join</label>
              <input type="date" class="form-control" name="tgl">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" class="form-control">
                <option value="">-- Pilih Status --</option>
                <option value="Enable">Enable</option>
                <option value="Disable">Disable</option>
              </select>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <?php echo form_input('username', array('class'=>'form-control'))?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <?php echo form_password('password', array('class'=>'form-control'))?>
            </div>
            <button type="submit" class="btn btn-primary btn-md">Simpan</button>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

