<?php

class Usuario_model extends CI_Model {

    //tabela
    var $table = 'Usuario';
    //colunas
    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $login = '';
    var $senha = '';
    var $nome = '';
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

    //cadastra um novo usuário
    public function post($data) {

        //insere na tabeça
        $this->db->insert($this->table, $data);

        return $this->insert_id();
    }

    //atualiza um usuário
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

    //deleta (oculta um usuário se houver movimentação)
    public function delete($_i) {

        //array de verificação
        $check = array();

        //tabelas que serão analisadas
        $tables = array('Atendimento', 'Chamado', 'Historico');

        //pra cada tabela, veja se há registros deste _i
        foreach ($tables as $table) {
            $this->db->where('Usuario_i', $_i);
            $query = $this->db->count_all($tables[$table]);
            if ($query != 0) {
                $check[$tables[$table]] = $query;
            }
        }

        //se não houver registros delete o usuário
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
