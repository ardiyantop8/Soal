<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function index()
    {
        $data['title']    = 'Create Question With Ajax';
        $this->load->view('Soal/Create', $data);
    }
}
