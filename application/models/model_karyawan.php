<?php

    class Model_karyawan extends CI_Model
    {
        function list_karyawan(){
            $karyawan = $this->db->get('karyawan');
            return $karyawan;
        }

        function get_karyawan($kodeKaryawan)
        {
            return $this->db->get_where('karyawan', array('id_tbl'=>$kodeKaryawan));
        }

        function lihat_karyawan($kodeKaryawan)
        {
            $tgl = date('Y-m-d');
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->join('absensi', 'karyawan.id_kary = absensi.id_kary');
            $this->db->where('karyawan.id_kary', $kodeKaryawan);
            $this->db->where('tgl', $tgl);
            $absensi = $this->db->get();

            return $absensi;
        }

        function lihat_izin($kodeKaryawan)
        {
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->join('izin', 'karyawan.id_kary = izin.id_kary');
            $this->db->where('karyawan.id_kary', $kodeKaryawan);
            $absensi = $this->db->get();

            return $absensi;
        }
    }
    
?>