<?php

class Cliente_model extends CI_Model {

    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Cliente_i = null;
    var $TipoContato_i = null;
    var $ClasseContato_i = null;
    var $descricao = '';
    var $observacao = '';

    function __construct() {
        parent::__construct();
    }

    public function getById($_i) {
        
    }

    public function getByCliente($Cliente_i) {
        
    }

    public function getByTipoContato($Cliente_i = null, $TipoContato_i) {
        
    }

    public function getByClasseContato($Cliente_i = null, $ClasseContato_i) {
        
    }

    public function getByDescricao($descricao) {
        
    }

    public function post($data) {
        
    }

    public function put($data) {
        
    }

    public function delete($_i) {
        
    }

}
