<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class ManajIzin extends CI_Controller {

        public function index()
        {
            $this->load->model('model_izin');
            $data['izin'] = $this->model_izin->izin()->result();

            $data['judul'] = "Izin";

            $this->load->view('header', $data);
            $this->load->view('izin', $data);
            $this->load->view('footer');
        }

        public function accept()
        {
            $dataizin = array('proses'=> "Accept");
            $iz = $this->uri->segment(3);
            $this->db->where('id_tbl', $iz);
            $this->db->update('izin', $dataizin);
            redirect('manajizin');
        }

        public function denied()
        {
            $dataizin = array('proses'=> "Denied");
            $iz = $this->uri->segment(3);
            $this->db->where('id_tbl', $iz);
            $this->db->update('izin', $dataizin);
            redirect('manajizin');
        }
    }
?>