<?php

  date_default_timezone_set('Asia/Jakarta');
  class Model_laporan extends CI_Model
    {
        function laporan_hariIni(){
            $tgl = date('Y-m-d');
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->join('absensi', 'karyawan.id_kary = absensi.id_kary');
            $this->db->where('tgl', $tgl);
            $absensi = $this->db->get();

            return $absensi;
        }

    }
    
?>