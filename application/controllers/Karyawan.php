<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Karyawan extends CI_Controller {

        public function index()
        {
            $this->load->model('model_karyawan');
            $data['karyawan'] = $this->model_karyawan->list_karyawan()->result();

            $data['judul'] = "Karyawan";

            $this->load->view('header', $data);
            $this->load->view('karyawan', $data);
            $this->load->view('footer');
        }

        public function tambah()
        {
            $data['judul'] = "Tambah Karyawan";

            $this->load->view('header', $data);
            $this->load->view('karyawan_input', $data);
            $this->load->view('footer');
        }

        public function tambah_simpan()
        {
            $datakaryawan = array('id_kary'     =>$this->input->post('ID'),
                                  'nama'        =>$this->input->post('nama'),
                                  'tgl_join'    =>$this->input->post('tgl'), 
                                  'status'      =>$this->input->post('status'),
                                  'username'      =>$this->input->post('username'),
                                  'password'      =>$this->input->post('password')
                                );
            $this->db->insert('karyawan', $datakaryawan);
            redirect('karyawan');
        }

        public function edit()
        {
            $this->load->model('model_karyawan');
            $ky = $this->uri->segment(3);
            $data['karyawan_get'] = $this->model_karyawan->get_karyawan($ky)->row_array();
            $data['judul'] = "Edit Karyawan";

            $this->load->view('header', $data);
            $this->load->view('karyawan_edit', $data);
            $this->load->view('footer');
            
        }
        
        public function edit_simpan()
        {
            $id = $this->input->post('id');
            $datakaryawan = array('id_kary'     =>$this->input->post('ID'),
                                  'nama'        =>$this->input->post('nama'),
                                  'tgl_join'    =>$this->input->post('tgl'), 
                                  'status'      =>$this->input->post('status'),
                                  'username'      =>$this->input->post('username'),
                                  'password'      =>$this->input->post('password')
                                );
            $this->db->where('id_tbl', $id);
            $this->db->update('karyawan', $datakaryawan);
            redirect('karyawan');
        }

        public function hapus()
        {
            $ky = $this->uri->segment(3);
            $this->db->where('id_tbl', $ky);
            $this->db->delete('karyawan');
            redirect('karyawan');
        }

        public function disable()
        {
            $datakaryawan = array('status'=> "Disable");
            $ky = $this->uri->segment(3);
            $this->db->where('id_tbl', $ky);
            $this->db->update('karyawan', $datakaryawan);
            redirect('karyawan');
        }

        public function enable()
        {
            $datakaryawan = array('status'=> "Enable");
            $ky = $this->uri->segment(3);
            $this->db->where('id_tbl', $ky);
            $this->db->update('karyawan', $datakaryawan);
            redirect('karyawan');
        }
    }
?>