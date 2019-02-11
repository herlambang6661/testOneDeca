
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
          <h4 class="widget-title"><i class="fa fa-long-arrow-right"></i> Edit Data Karyawan</h4>
        </header>
        <hr class="widget-separator"/>
        <div class="widget-body">
          <?php echo form_open('karyawan/edit_simpan'); ?>
          <?php echo form_hidden('id', $this->uri->segment(3)); ?>
            <div class="form-group">
              <label for="id">ID Karyawan</label>
              <?php echo form_input('ID', $karyawan_get['id_kary'], array('class'=>'form-control'))?>
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <?php echo form_input('nama', $karyawan_get['nama'], array('class'=>'form-control'))?>
            </div>
            <div class="form-group">
              <label for="tgl">Tanggal Join</label>
              <input type="date" class="form-control" name="tgl" value="<?php echo $karyawan_get['tgl_join']?>">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" class="form-control">
                <option value="<?php echo $karyawan_get['status']?>">-- <?php echo $karyawan_get['status']?> --</option>
                <option value="Enable">Enable</option>
                <option value="Disable">Disable</option>
              </select>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <?php echo form_input('username', $karyawan_get['username'], array('class'=>'form-control'))?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <?php echo form_password('password', $karyawan_get['password'], array('class'=>'form-control'))?>
            </div>
            <button type="submit" class="btn btn-primary btn-md">Simpan</button>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

