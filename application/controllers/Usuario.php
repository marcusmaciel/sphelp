<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //ver se o login, senha estão certos e se esse usuário está ativo
    public function autenticar() {

        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        
        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //verifica se algum usuário ativo é encontrado
        $auth = $this->Usuario->getAutenticar($login, $senha);

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

        $chave = $this->input->post('chave');
        $valor = $this->input->post('valor');
        
        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('usuario_model', 'Usuario');

        //declara a variável que vai receber o retorno
        $result = null;

        //usa a chave para selecionar uma variante
        switch ($chave) {

            //status -> "ativo", "inativo"
            case '_s' :
                $result = $this->Usuario->getBy_s($valor);
                break;
            //data criado -> [$dataIni,$dataEnd]]
            case '_d' :
                $result = $this->Usuario->getBy_d($valor[1], $valor[2]);
                break;
            //login -> string
            case 'login' :
                $result = $this->Usuario->getByLogin($valor);
                break;
            //index -> int
            default :
                $result = $this->Usuario->getBy_i($valor);
                break;
        };
        
        //converte o resultado e retorna em JSON
        echo json_encode($result);
    }

}
