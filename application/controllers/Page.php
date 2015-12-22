<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();
    var $route = array(
    );

    public function index() {

        $page = $this->input->post('componente') ? : 'home';

        //criando cabeçalho e injetando scripts primários
        $this->template['head'] = $this->load->view('modulo/head', '', true);

        //usuario não autenticado ou sessão expirada
        if ($this->sessao() == false) {
            $this->login();
        } else {
            $this->{$page}();
        };
    }

    //carrega view home
    private function home() {

        //mainHeader
        $Usuario = $this->session->userdata('Usuario')[0];
        $this->template['mainHeader'] = $this->load->view('modulo/mainHeader', $Usuario, true);

        //mainSidebar(menu)
        $this->template['mainSidebar'] = $this->load->view('modulo/mainSidebar', '', true);

        //contentWrapper
        $componentes = $this->com_clientes();
        $this->template['contentWrapper'] = $this->load->view('modulo/contentWrapper', $componentes, true);

        //mainFooter
        $Versao = $this->versaoSistema();
        $this->template['mainFooter'] = $this->load->view('modulo/mainFooter', $Versao, true);

        //controlSidebar
        $this->template['controlSidebar'] = $this->load->view('modulo/controlSidebar', '', true);
        
        //token de segurança
        $this->csrfToken();
        
        //template load
        $this->load->view('index', $this->template);
    }

    //carrega view login
    private function login() {
        $Versao = $this->versaoSistema();
        $this->template['loginPage'] = $this->load->view('modulo/loginPage', $Versao, true);
        $this->load->view('index', $this->template);
    }

    //verifica se a sessão está ativa
    private function sessao() {
        return $this->session->has_userdata('Usuario');
    }

    //retorna a versão do sistema
    private function versaoSistema() {
        $this->load->model('Versao_model', 'Versao');
        return $this->Versao->get()[0];
    }

    //gera o token e injeta na window
    private function csrfToken() {
        $this->template['csrfToken'] = $this->load->view('componente/csrfToken', '', true);
    }

    //carrega componente clientes
    private function com_clientes() {
        return array(
            'rows' => array(
                'row' => array(
                    'col' => array(
                        'class' => 'col-lg-8 col-md-9 col-sm-12 col-xs-12',
                        'box' => array(
                            $this->load->view('componente/clientes', '', true)
                        )
                    )
                )
            )
        );
    }

}
