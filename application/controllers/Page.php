<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();

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

        $this->modulo_mainHeader();
        $this->modulo_mainSidebar();
        $this->modulo_contentWrapper();
        $this->modulo_mainFooter();
        $this->modulo_controlSidebar();
        $this->modulo_csrfToken();

        //template load
        $this->load->view('index', $this->template);
    }

    //carrega view login
    private function login() {
        $Versao = $this->versaoSistema();
        $data = array(
            'usuarioLogin' => $this->load->view('fullWindow/usuarioLogin', '', true),
            'fixedFooter' => $this->load->view('fullWindow/fixedFooter', $Versao, true)
        );
        $this->template['fullWindow'] = $this->load->view('modulo/fullWindow', $data, true);
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

    //carregamento de módulos
    private function modulo_csrfToken() {
        $this->template['wrapper'] = $this->load->view('modulo/csrfToken', '', true);
    }

    private function modulo_mainHeader() {
        $Usuario = $this->session->userdata('Usuario')[0];
        $this->template['wrapper'] = $this->load->view('modulo/mainHeader', $Usuario, true);
    }

    private function modulo_mainSidebar() {
        $this->template['wrapper'] = $this->load->view('modulo/mainSidebar', '', true);
    }

    private function modulo_contentWrapper($content = null) {
        $content !== null ? $content = $content : $content = $this->content_perfil();
        $this->template['wrapper'] = $this->load->view('modulo/contentWrapper', $content, true);
    }

    private function modulo_mainFooter() {
        $Versao = $this->versaoSistema();
        $this->template['mainFooter'] = $this->load->view('modulo/mainFooter', $Versao, true);
    }

    private function modulo_controlSidebar() {
        $this->template['controlSidebar'] = $this->load->view('modulo/controlSidebar', '', true);
    }

    //carrega wrapper de clientes
    private function content_cliente() {
        return array(
            'content' => array(
                'row1' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-9 col-md-8 col-sm-7 col-xs-12',
                        'box' => array(
                            'clienteLista' => $this->load->view('componente/clienteLista', '', true),
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-3 col-md-4 col-sm-5 col-xs-12',
                        'box' => array(
                            'clienteBloqueio' => $this->load->view('componente/clienteBloqueio', '', true)
                        )
                    )
                )
            )
        );
    }

    //perfil de usuario
    private function content_perfil() {
        return array(
            'content' => array(
                'row1' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-3 col-md-4 col-sm-6 col-xs-12',
                        'box' => array(
                            'usuarioInfo' => $this->load->view('contentWrapper/usuarioInfo', '', true),
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-9 col-md-8 col-sm-6 col-xs-12',
                        'box' => array(
                            'graficoChamado30Dia' => $this->load->view('contentWrapper/graficoChamado30Dia', '', true),
                        )
                    )
                ),
                'row2' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-7 col-md-7 col-sm-6 col-xs-12',
                        'box' => array(
                            'usuarioChamado' => $this->load->view('contentWrapper/usuarioChamado', '', true)
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-5 col-md-5 col-sm-6 col-xs-12',
                        'box' => array(
                            'clienteBloqueio' => $this->load->view('contentWrapper/clienteBloqueio', '', true)
                        )
                    )
                ),
            )
        );
    }

}
