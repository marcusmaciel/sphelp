<?php

class Versao_model extends CI_Model {

    //tabela
    var $table = 'Versao';
    //colunas
    var $_i = null;
    var $_d = '';
    var $numero = '';
    var $implementacao = '';
    var $correcao = '';
    //colunas não alteráveis
    var $column_blocks = array('_i', '_d');

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

    //busca a ultima versão
    public function getLast() {

        $this->db->select_max('_i');
        return $this->db->get($this->table)->result();
    }

    //cadastra
    public function post($data) {

        //insere na tabeça
        $this->db->insert($this->table, $data);

        return $this->insert_id();
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

    //deleta (oculta um usuário se houver movimentação)
    public function delete($_i) {

        $this->db->delete($this->table, array('_i' => $_i));
        return true;
    }

}
