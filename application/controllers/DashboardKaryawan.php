<?php
    
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DashboardKaryawan extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model('model_login');
            $this->load->model('model_absensi');
            $this->load->model('model_karyawan');
        }

        public function index()
        {

            $data['judul'] = "Absensi";

            $this->load->view('header_dashboard', $data);
            $this->load->view('dashboard_absen', $data);
            $this->load->view('footer');
        }

        function masukkaryawan(){
            $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
    
            $cek_karyawan=$this->model_login->auth_karyawan($username,$password);
    
            if($cek_karyawan->num_rows() > 0){
                $data=$cek_karyawan->row_array();
                if ($data['status'] == 'Enable') {
                    $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('id_kary',$data['id_kary']);
                    $this->session->set_userdata('nama',$data['nama']);
            
                    redirect('DashboardMasukKaryawan');
                    
                } elseif ($data['status'] == 'Disable') {                
                    $url=base_url();
                    echo $this->session->set_flashdata('msg', 'Status Anda Di <strong>NON AKTIFKAN</strong>, Mohon konfirmasi ke Admin');
                    redirect($url);
                }
            }else{
                $url=base_url();
                echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                redirect($url);
            }
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('');
            redirect($url);
        }
    }
?>