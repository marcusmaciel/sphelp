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
        $componentes = $this->com_cliente();
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
        $this->template['usuarioLogin'] = $this->load->view('modulo/usuarioLogin', $Versao, true);
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

    //carrega wrapper de clientes
    private function com_cliente() {
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

    //carrega wrapper de usuario (tela inicial)
    private function com_usuario() {
        return array(
            'content' => array(
                'row1' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-3 col-md-4 col-sm-6 col-xs-12',
                        'box' => array(
                            'usuarioInfo' => $this->load->view('componente/usuarioInfo', '', true),
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-9 col-md-8 col-sm-6 col-xs-12',
                        'box' => array(
                            'graficoChamado30Dia' => $this->load->view('componente/graficoChamado30Dia', '', true),
                        )
                    )
                ),
                'row2' => array(
                    'leftCol' => array(
                        'class' => 'col-lg-7 col-md-7 col-sm-6 col-xs-12',
                        'box' => array(
                            'usuarioChamado' => $this->load->view('componente/usuarioChamado', '', true)
                        )
                    ),
                    'rightCol' => array(
                        'class' => 'col-lg-5 col-md-5 col-sm-6 col-xs-12',
                        'box' => array(
                            'clienteBloqueio' => $this->load->view('componente/clienteBloqueio', '', true)
                        )
                    )
                ),
            )
        );
    }

}
