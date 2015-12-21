<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chamado extends CI_Controller {

    //retorna no formato json
    private function toJson($data) {
        $this->output
                ->set_content_type('application/json; charset=utf-8')
                ->set_output(json_encode($data));
    }

    //seleciona um ou todos de acordo com a o parametro e o texto de pesquisa
    public function listar() {

        //carrega o módulo de usuário para tentar autenticar o mesmo
        $this->load->model('Chamado_model', 'Chamado');

        $result = $this->Chamado->get($this->input->post());

        $this->toJson($result);
 
    }

}
