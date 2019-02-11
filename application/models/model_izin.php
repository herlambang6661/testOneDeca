<?php

    class Model_izin extends CI_Model
    {

        function izin(){
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->join('izin', 'karyawan.id_kary = izin.id_kary');
            $izin = $this->db->get();
            return $izin;
        }
    }
    
?>