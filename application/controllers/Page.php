<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();
    var $route = array(
        
    );

    public function index() {

        //criando cabeçalho e injetando scripts primários
        $this->template['head'] = $this->load->view('modulo/head', '', true);
        $this->template['scripts'] = $this->load->view('modulo/scripts', '', true);
        
        //usuario não autenticado ou sessão expirada
        if ($this->sessao() == false) {
            $this->login();
        } else {
            
        };
    }
    
    //carrega view home
    private function home() {
        $this->template['auth'] = true;
        $this->template['mainHeader'] = $this->load->view('modulo/mainHeader', '', true);
        $this->template['mainSidebar'] = $this->load->view('modulo/mainSidebar', '', true);
        $this->template['contentWrapper'] = $this->load->view('modulo/contentWrapper', '', true);
        $this->template['mainFooter'] = $this->load->view('modulo/mainFooter', '', true);
        $this->load->view('index', $this->template);
    }

    //carrega view login
    private function login() {
        $this->template['loginPage'] = $this->load->view('modulo/loginPage', '', true);
        $this->load->view('index', $this->template);
    }

    //verifica se a sessão está ativa
    private function sessao() {

        //carrega a sessão instanciada (tenta)
        $sessao = $this->session->userdata('user_id');

        //retorna a resposta
        if ($sessao) {
            return true;
        } else {
            return false;
        };
    }

}
