<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $template = array();
    var $data = array();

    public function index() {

        $data = $this->input->post() ? : null;

        //requisição direta pro backend
        if ($data === null) {

            //criando cabeçalho e injetando scripts primários
            $this->template['head'] = $this->load->view('modulo/head', '', true);

            if ($this->sessao() === 0) {
                $this->login();
            } else {
                $this->home();
            };
        };

        //requisição de componentes através de AJAX
        if ($data !== null) {
            $response = $this->ajax($data);
            return $response;
        };
    }

    //métodos client-side
    private function home() {

        $this->template['mainHeader'] = $this->mainHeader();
        $this->template['mainSidebar'] = $this->mainSidebar();
        $this->template['contentWrapper'] = $this->contentWrapper();
        $this->template['mainFooter'] = $this->mainFooter();
        $this->template['controlSidebar'] = $this->controlSidebar();
        $this->template['csrfToken'] = $this->csrfToken();

        //template load
        $this->load->view('index', $this->template);
    }

    private function login() {
        $Versao = $this->versaoSistema();
        $data = array(
            'usuarioLogin' => $this->load->view('fullWindow/usuarioLogin', '', true),
            'fixedFooter' => $this->load->view('fullWindow/fixedFooter', $Versao, true)
        );
        $this->template['fullWindow'] = $this->load->view('modulo/fullWindow', $data, true);
        $this->load->view('index', $this->template);
    }

    private function sessao() {
        if ($this->session->has_userdata('Usuario')) {
            return 1;
        } else {
            return 0;
        }
    }

    private function versaoSistema() {
        $this->load->model('Versao_model', 'Versao');
        return $this->Versao->get()[0];
    }

    //método para respostar ajax
    private function ajax($data) {
        $return = $this->contentWrapper($data['content']);
        $this->output->set_output($return);
    }

    //carregamento de módulos (in client-side)
    private function csrfToken() {
        return $this->load->view('modulo/csrfToken', '', true);
    }

    private function mainHeader() {
        $Usuario = $this->session->userdata('Usuario')[0];
        return $this->load->view('modulo/mainHeader', $Usuario, true);
    }

    private function mainSidebar() {
        return $this->load->view('modulo/mainSidebar', '', true);
    }

    private function contentWrapper($content = null) {
        $content !== null ? $content = $this->{$content}() : $content = $this->content_perfil();
        return $this->load->view('modulo/contentWrapper', $content, true);
    }

    private function mainFooter() {
        $Versao = $this->versaoSistema();
        return $this->load->view('modulo/mainFooter', $Versao, true);
    }

    private function controlSidebar() {
        return $this->load->view('modulo/controlSidebar', '', true);
    }

    //carrega conponentes dentro do wrapper
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

    private function content_cliente() {
        return array(
            'content' => array(
                'row1' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-9 col-md-8 col-sm-7 col-xs-12',
                        'box' => array(
                            'clienteLista' => $this->load->view('contentWrapper/clienteLista', '', true),
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-3 col-md-4 col-sm-5 col-xs-12',
                        'box' => array(
                            'clienteBloqueio' => $this->load->view('contentWrapper/clienteBloqueio', '', true)
                        )
                    )
                )
            )
        );
    }

    private function content_configuracao() {
        return array(
            'content' => array(
                'row1' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-4 col-md-6 col-sm-12 col-xs-12',
                        'box' => array(
                            'configuracaoEmail' => $this->load->view('contentWrapper/configuracaoEmail', '', true),
                        )
                    )
                )
            )
        );
    }

}
