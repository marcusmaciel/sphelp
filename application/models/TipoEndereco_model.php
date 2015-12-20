<?php

class TipoEndereco_model extends CI_Model {

    //tabela
    var $table = 'TipoEndereco';
    //colunas
    var $_i = null;
    var $descricao = '';
    //colunas não alteráveis
    var $column_blocks = array('_i');

    function __construct() {
        parent::__construct();
    }

    //busca pelo _i (1 ou todos)
    public function get($_i = null) {

        if ($_i != null) {
            $this->db->where('_i', $_i);
        };

        return $this->db->get($this->table)->result();
    }

    public function post($data) {

        //insere na tabeça
        $this->db->insert($this->table, $data);

        return $this->insert_id();
    }

    public function put($data) {

        //define o $index de update
        $this->db->where($data->_i);

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

    public function delete($_i) {

        //array de verificação
        $check = array();

        //tabelas que serão analisadas
        $tables = array('ClienteEndereco');

        //pra cada tabela, veja se há registros deste _i
        foreach ($tables as $table) {
            $this->db->where('TipoEndereco_i', $_i);
            $query = $this->db->count_all($tables[$table]);
            if ($query != 0) {
                $check[$tables[$table]] = $query;
            }
        }

        //se não houver registros delete
        if (count($check) == 0) {
            $this->db->delete($this->table, array('_i' => $_i));
            return true;
        }

        //caso contrário retorne as tabelas e a quantidade de registros
        else {
            return $check;
        }
    }

}
