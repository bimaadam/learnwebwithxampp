<?php
class Home extends CI_Controller
{
        public function index()
        {
            $data=array('judul'=>'HOME', 'subjudul'=>'');
            $this->load->view('v_template.php', $data, false) ;
        }

        public function kompak()
        {
            $data=array('judul'=>'kompak', 'subjudul'=>'');
            $this->load->view('v_kompak.php', $data, false) ;
        }

        public function manper()
        {
            $data=array('judul'=>'manper', 'subjudul'=>'');
            $this->load->view('v_manper.php', $data, false) ;
        }

        public function perbankan()
        {
            $data=array('judul'=>'perbankan', 'subjudul'=>'');
            $this->load->view('v_perbankan.php', $data, false) ;
        }
}