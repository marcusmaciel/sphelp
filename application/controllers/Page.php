<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();
    var $route = array(
    );

    public function index($page = 'home') {

        //criando cabeçalho e injetando scripts primários
        $this->template['head'] = $this->load->view('modulo/head', '', true);

        //usuario não autenticado ou sessão expirada
        if ($this->sessao() == false) {
            $this->login();
        } else {
            $this->home();
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
        $componentes = array(
            'leftCol' => array(
                'estatisticas' => $this->load->view('componente/estatisticas', '', true)
            ),
            'rightCol' => array(
                'chamados' => $this->load->view('componente/chamados', '', true)
            )
        );
        $this->template['contentWrapper'] = $this->load->view('modulo/contentWrapper', $componentes, true);
        //mainFooter
        $Versao = $this->versaoSistema();
        $this->template['mainFooter'] = $this->load->view('modulo/mainFooter', $Versao, true);
        //controlSidebar
        $this->template['controlSidebar'] = $this->load->view('modulo/controlSidebar', '', true);
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

}
