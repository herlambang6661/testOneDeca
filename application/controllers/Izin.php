<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Izin extends CI_Controller {

        public function index()
        {
            $this->load->model('model_izin');
            $data['izin'] = $this->model_izin->izin()->result();

            $data['judul'] = "Izin";

            $this->load->view('header_dashboard', $data);
            $this->load->view('dashboard_izin', $data);
            $this->load->view('footer');
        }

        function tambah_izin()
        {
            $dataizin = array('id_kary'     =>$this->input->post('id'),
                                  'izin'        =>$this->input->post('izin'),
                                  'tgl'    =>$this->input->post('tgl'), 
                                  'keterangan'      =>$this->input->post('keterangan'),
                                  'proses'      =>'On Going'
                                );
            $this->db->insert('izin', $dataizin);
            echo $this->session->set_flashdata('msg','Izin Berhasil Diinput');
            $url=base_url();
            redirect($url);
            
        }
    }
?>