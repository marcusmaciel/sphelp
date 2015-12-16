<?php

class Chamado_model extends CI_Model {

    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Usuario_i = null;
    var $Cliente_i = null;
    var $dataEnd = '';
    var $descricao = '';
    var $tag = '';
    var $emailFeedback = '';

    function __construct() {
        parent::__construct();
    }

    public function getById($_i = null) {
        
    }

    public function getByUsuario($Usuario_i) {
        
    }

    public function getByCliente($Cliente_i) {
        
    }

    public function getByDataCriado($dataIni, $dataEnd) {
        
    }

    public function getByDataFinalizado($dataIni, $dataEnd) {
        
    }

    public function getByDescricao($tag) {
        
    }

    public function getByTag($tag) {
        
    }

    public function post($data) {
        
    }

    public function put($data) {
        
    }

    public function delete($_i) {
        
    }

}
