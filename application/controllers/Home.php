<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        function __construct(){
            parent::__construct();
            if($this->session->userdata('masuk') != TRUE){
                    $url=base_url();
                    redirect($url);
                }
          }

        public function index()
        {
            $data['judul'] = "Dashboard";
            $this->load->model('model_karyawan');
            $this->load->model('model_izin');
            $this->load->model('model_absensi');
            $jml = $this->model_karyawan->list_karyawan()->num_rows();
            $izin = $this->model_izin->izin()->num_rows();
            $absen = $this->model_absensi->absensi_hariIni()->num_rows();

            $data['jml'] = $jml;
            $data['izin'] = $izin;
            $data['absen'] = $absen;
            $this->load->view('header', $data);
            $this->load->view('index');
            $this->load->view('footer');
        }
    }
?>