<?php

class TipoContato_model extends CI_Model {

    //tabela
    var $table = 'TipoContato';
    //colunas
    var $_i = null;
    var $descricao = '';

    function __construct() {
        parent::__construct();
    }

    public function get() {
        return $this->db->get($this->table)->return();
    }

}
