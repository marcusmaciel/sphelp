<?php

class ClienteContato_model extends CI_Model {

    //tabela
    var $table = 'ClienteContato';
    var $references = array();
    //colunas
    var $_i = null;
    var $_d = '';
    var $Cliente_i = null;
    var $TipoContato_i = null;
    var $ClasseContato_i = null;
    var $descricao = '';
    var $observacao = '';
    //colunas não alteráveis
    var $column_blocks = array('_i', '_d', 'Cliente_i');

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

    //cadastra
    public function post($data) {

        //insere na tabeça
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    //atualiza
    public function put($data) {

        //define o $index de update
        $this->db->where('_i', $data->_i);

        //exlui elementos que não devem atualizar
        $values = $data;
        foreach ($column_blocks as $column) {
            unset($values[array_search($column, $values)]);
        };

        //check para atualizar e retorna status
        if ($this->db->update($this->table, $values)) {
            return true;
        } else {
            return false;
        };
    }

    //deleta
    public function delete($_i) {

        $this->db->delete($this->table, array('_i' => $_i));
        return true;
    }

}
