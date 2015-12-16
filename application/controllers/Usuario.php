<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    private function autenticar() {
        
        $Usuario = $this->load->model('Usuario_model');
        
        echo $Usuario->getById();
        
        //print_r($this->input->post());
    }

}
