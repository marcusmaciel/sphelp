<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Util extends CI_Controller {

    //verifica o status dos servidores da sefaz
    public function consultaNfe() {

        $this->load->library('consultanfe');
        echo $this->consultanfe->check();
    }

    //consulta cep <viacep>
    public function consultaCep() {

        $cep = $this->input->post('cep');

        $json = file_get_contents('http://viacep.com.br/ws/' . $cep . '/json/');

        echo $json;
    }

}
