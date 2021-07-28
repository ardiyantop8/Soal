<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function index()
    {
        $data['title']    = 'Create Question With Ajax';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('Soal/Create', $data);
        $this->load->view('template/footer');
    }
}
