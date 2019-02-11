<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('model_login');
            $this->load->model('model_absensi');
        }
    
        function index(){

            $data['judul'] = "Dashboard";

            $this->load->view('header_dashboard', $data);
            $this->load->view('dashboard');
            $this->load->view('footer');
        }
    
        function authadmin(){
            $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
    
            $cek_admin=$this->model_login->auth_admin($username,$password);
    
            if($cek_admin->num_rows() > 0){
                $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('nick',$data['nick']);
                redirect('home');
            }else{
                $url=base_url();
                echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                redirect($url);
            }
        }
    
        function authkaryawan(){
            $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
    
            $cek_karyawan=$this->model_login->auth_karyawan($username,$password);
    
            if($cek_karyawan->num_rows() > 0){
                $data=$cek_karyawan->row_array();
                if ($data['status'] == 'Enable') {
                    $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('id_kary',$data['id_kary']);
                    $this->session->set_userdata('nama',$data['nama']);

                    $cek_validAbsen=$this->model_absensi->validasiAbsensi($data['id_kary']);
                    if ($cek_validAbsen->num_rows() > 0) {
                        $this->session->set_userdata('valid', 'sudah');
                        $cek_absenmasuk=$this->model_absensi->validasiAbsensi($data['id_kary']);
                        $data2=$cek_absenmasuk->row_array();
                        $jam = date("H:i:s");
                        $masuk = $jam - $data2['masuk'];
                        if ($masuk > 5) {
                            $this->session->set_userdata('jammasuk', $data2['masuk']);
                            $this->session->set_userdata('checkout', 'boleh');
                            redirect('dashboardKaryawan');
                        } elseif ($masuk <= 5) {
                            $this->session->set_userdata('checkout', 'tidak');
                            redirect('dashboardKaryawan');
                        }
                    
                    } else {
                        $this->session->set_userdata('valid', 'belum');
                        redirect('dashboardKaryawan');
                    }
                    
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