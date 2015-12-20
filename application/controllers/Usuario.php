<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //retorna no formato json
    private function toJson($data) {
        $this->output
                ->set_content_type('application/json; charset=utf-8')
                ->set_output(json_encode($data));
    }

    //ver se o login, senha estão certos e se esse usuário está ativo
    public function autenticar() {

        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('Usuario_model', 'Usuario');

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
        $this->load->model('Usuario_model', 'Usuario');

        //usa a chave para selecionar uma variante
        $result = $this->Usuario->get($this->input->post());
        
        //retorna em json válido
        $this->toJson($result);
    }

}
