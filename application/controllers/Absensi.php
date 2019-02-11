<?php
    
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Absensi extends CI_Controller {

        public function index()
        {
            $this->load->model('model_absensi');
            $data['karyawan'] = $this->model_absensi->list_karyawan()->result();
            $data['absensi'] = $this->model_absensi->absensi_hariIni()->result();

            $data['judul'] = "Absensi";

            $this->load->view('header', $data);
            $this->load->view('absensi', $data);
            $this->load->view('footer');
        }

        function inputAbsen()
        {
            $id = $this->uri->segment(3);
            $tgl = $this->uri->segment(4);
            $jam = $this->uri->segment(5);

            $dataabsensi = array('id_kary'     =>$id,
                                  'tgl'        =>$tgl,
                                  'masuk'    =>$jam,
                                );
            $this->db->insert('absensi', $dataabsensi);
            echo $this->session->set_flashdata('msg','Absen Berhasil Diinput');
            $url=base_url();
            redirect($url);

        }
        

        function inputAbsenKeluar()
        {

            $id = $this->uri->segment(3);
            $tgl = $this->uri->segment(4);
            $jam = $this->uri->segment(5);
            $jammasuk = $this->uri->segment(6);
            $total = $jam - $jammasuk;
            $overtime = $total - 6;

            $dataabsensi = array('id_kary'     =>$id,
                                  'tgl'        =>$tgl,
                                  'keluar'    =>$jam,
                                  'total'    =>$total,
                                  'overtime'    =>$overtime,
                                );
            $this->db->where('id_kary', $id);
            $this->db->where('tgl', $tgl);
            $this->db->update('absensi', $dataabsensi);
            echo $this->session->set_flashdata('msg','Absen Berhasil Diinput');
            $url=base_url();
            redirect($url);
        }
    }
?>