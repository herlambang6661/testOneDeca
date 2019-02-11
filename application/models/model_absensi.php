<?php

  date_default_timezone_set('Asia/Jakarta');
  class Model_absensi extends CI_Model
    {
        function absensi_hariIni(){
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->join('absensi', 'karyawan.id_kary = absensi.id_kary');
            $absensi = $this->db->get();

            return $absensi;
        }

        
        function list_karyawan(){
            $karyawan = $this->db->get('karyawan');
            return $karyawan;
        }

        function lihatAbsensi($id)
        {   
            $time = date("H:i:s");
            $query = $this->db->query("SELECT * FROM absensi WHERE id_kary='$id' AND tgl='$time' LIMIT 1");
            return $query;
        }

        function absensi(){
            $absensi = $this->db->get('absensi');
            return $absensi;
        }

        function validasiAbsensi($id)
        {            
            $tgl = date('Y-m-d');
            $query = $this->db->query("SELECT * FROM absensi WHERE id_kary='$id' AND tgl='$tgl' LIMIT 1");
            return $query;
        }
    }
    
?>