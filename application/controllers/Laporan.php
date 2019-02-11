<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Laporan extends CI_Controller {

        public function index()
        {
            $data['judul'] = "Dashboard";

            $this->load->model('model_laporan');
            $data['laporan'] = $this->model_laporan->laporan_hariIni()->result();

            $this->load->view('header', $data);
            $this->load->view('laporan');
            $this->load->view('footer');
        }
    }
?>