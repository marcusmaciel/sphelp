<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //ver se o login, senha estão certos e se esse usuário está ativo
    public function autenticar() {
        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //verifica se algum usuário ativo é encontrado
        $auth = $this->Usuario->getAutenticar($this->input->post('login'), $this->input->post('senha'));

        if (count($auth) < 1) {
            echo 'false';
        } else {
            $this->session->set_userdata('Usuario', $auth);
            echo 'true';
        }
    }

    //faz o logoff do usuário, destruindo sua sessão
    public function logoff() {
        $this->session->sess_destroy();
        echo true;
    }

}
