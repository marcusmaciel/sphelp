<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

    public function index() {
        $this->load->view('lay');
    }

    public function login() {
        print_r($this->input->post());
    }

    public function logout() {
        echo 'logout';
    }

}
