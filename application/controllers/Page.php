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
            $this->home();
        };
    }

    //carrega view home
    private function home() {
        
        $Usuario = $this->session->userdata('Usuario')[0];
        
        $this->template['mainHeader'] = $this->load->view('modulo/mainHeader', $Usuario, true);
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
        return $this->session->has_userdata('Usuario');
    }

}
