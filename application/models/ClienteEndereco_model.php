<?php

class ClienteEndereco_model extends CI_Model {

    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Cliente_i = null;
    var $TipoEndereco_i = null;
    var $cep = '';
    var $logradouro = '';
    var $complemento = '';
    var $bairro = '';
    var $localidade = '';
    var $uf = '';

    function __construct() {
        parent::__construct();
    }

    public function getById($_i = null) {
        
    }

    public function getByCliente($Cliente_i) {
        
    }

    public function getByTipoEndereco($TipoEndereco_i) {
        
    }

    public function getByCep($cep) {
        
    }

    public function getByLogradouro($logradouro) {
        
    }

    public function getByLocalidade($localidade) {
        
    }

    public function getByUf($uf) {
        
    }

    public function post($data) {
        
    }

    public function put($data) {
        
    }

    public function delete($_i) {
        
    }

}
