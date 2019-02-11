<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DashboardMasukKaryawan extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model('model_login');
            $this->load->model('model_absensi');
            $this->load->model('model_karyawan');
        }

        public function index()
        {
            $id = $this->session->userdata('id_kary');            

            $data['lihatkaryawan'] = $this->model_karyawan->lihat_karyawan($id)->result();
            $data['lihatizin'] = $this->model_karyawan->lihat_izin($id)->result();
            $data['judul'] = $this->session->userdata('nama');
            
            $this->load->view('header_karyawan', $data);
            $this->load->view('dashboard_karyawan', $data);
            $this->load->view('footer');
        }
    }
?>