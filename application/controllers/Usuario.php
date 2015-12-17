<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function autenticar() {
        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //verifica se algum usuário ativo é encontrado
        $auth = $this->Usuario->getAutenticar($this->input->post('login'), $this->input->post('senha'));

        if (count($auth) < 1){
            echo 'usuário inválido!';
        } else {
            echo 'autenticou!!!!';
        }
    }

}
