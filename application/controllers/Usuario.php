<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //verofoca se o login, senha estão certos e se esse usuário está ativo
    public function autenticar() {
        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //verifica se algum usuário ativo é encontrado
        $auth = $this->Usuario->getAutenticar($this->input->post('login'), $this->input->post('senha'));

        if (count($auth) < 1) {
            echo 'usuário inválido!';
        } else {
            $this->session->set_userdata('Usuario', $auth);
            print_r(json_encode($this->session->all_userdata()));
        }
    }

    public function sessao() {
        //carrega a sessão instanciada (tenta)
        $sessao = $this->session->userdata('user_id');
        //se não houver o ID da sessão, envia o usuário para a página de login
        if (!$sessao) {
            $this->load->view('modulo/loginPage');
        };
    }

}
