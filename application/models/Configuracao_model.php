<?php

class Configuracao_model extends CI_Model {

    //tabela
    var $table = 'Configuracao';
    var $references = array();
    //colunas
    var $_i = null;
    var $descricao = '';
    var $chave = '';
    var $valor = '';
    //colunas não alteráveis
    var $column_blocks = array('_i', 'chave');

    function __construct() {
        parent::__construct();
    }

    //busca usando as informações enviadas
    public function get($data = array()) {

        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }

        return $this->db->get($this->table)->result();
    }

    //novo registro
    //public function post($data) {} # somente inserido através de atualizações
    
    //atualiza um usuário
    public function put($data) {

        //define o $index de update
        $this->db->where('_i', $data->_i);

        //exlui elementos que não devem atualizar
        $values = $data;
        foreach ($column_blocks as $column) {
            unset($values[array_search($column_blocks[$column], $values)]);
        };

        //check para atualizar e retorna status
        if ($this->db->update($this->table, $values)) {
            return true;
        } else {
            return false;
        };
    }

    //deleta
    //public function delete($_i) {} # somente removida através de atualizações

}
