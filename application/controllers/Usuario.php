<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //ver se o login, senha estão certos e se esse usuário está ativo
    public function autenticar() {

        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //filtros de busca do usuário
        $data = array(
            '_s' => 'ativo',
            'login' => $this->input->post('login'),
            'senha' => $this->input->post('senha')
        );

        //verifica se algum usuário ativo é encontrado
        $auth = $this->Usuario->get($data);

        if (count($auth) > 0) {
            $this->session->set_userdata('Usuario', $auth);
            echo true;
        } else {
            echo false;
        }
    }

    //faz o logoff do usuário, destruindo sua sessão
    public function logoff() {
        $this->session->sess_destroy();
        echo true;
    }

    //seleciona um ou todos de acordo com a o parametro e o texto de pesquisa
    public function listar() {

        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //usa a chave para selecionar uma variante
        echo json_encode($this->Usuario->get($this->input->post()));
    }

}
