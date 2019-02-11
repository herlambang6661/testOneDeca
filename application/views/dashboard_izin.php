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

            <div class="col-lg-12">
            <?php echo form_open('izin/tambah_izin'); ?>
                <div class="form-group">
                    <label for="nama">Nama Karyawan</label>
                    <input type="hidden" value="<?php echo $this->session->userdata('id_kary') ?>" name="id">
                    <input type="text" class="form-control" value="<?php echo $this->session->userdata('nama') ?>" name="nama">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Join</label>
                    <input type="date" class="form-control" name="tgl" value="<?php echo $tanggalbiasa ?>">
                </div>
                <div class="form-group">
                    <label for="izin">Keterangan Izin</label>
                    <select name="izin" class="form-control" required>
                        <option value="">-- Pilih Keterangan --</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin">Izin</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" cols="30" rows="10" class="form-control" placeholder="Tulis Keterangan Izin" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button><br>
            <?php echo form_close(); ?>

            </div>
            <div class="col-lg-12">
                <input TYPE="button" class="btn btn-info btn-block" VALUE="Back" onClick="history.go(-1);">
            </div>
        </div>
      </div>
    </div>

