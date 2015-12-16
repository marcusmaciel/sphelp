<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();
    var $auth = false;

    public function index() {
        //criando cabeçalho e injetando scripts primários
        $this->template['head'] = $this->load->view('modulo/head', '', true);
        $this->template['scripts'] = $this->load->view('modulo/scripts', '', true);

        $this->home();
    }

    private function home() {
        $this->template['auth'] = true;
        $this->template['mainHeader'] = $this->load->view('modulo/mainHeader', '', true);
        $this->template['mainSidebar'] = $this->load->view('modulo/mainSidebar', '', true);
        $this->template['contentWrapper'] = $this->load->view('modulo/contentWrapper', '', true);
        $this->template['mainFooter'] = $this->load->view('modulo/mainFooter', '', true);
        $this->load->view('index', $this->template);
    }

    private function login() {
        $this->template['loginPage'] = $this->load->view('modulo/loginPage', '', true);
        $this->load->view('index', $this->template);
    }

}
