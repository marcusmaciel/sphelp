<?php

class Atendimento_model extends CI_Model {

    //tabela
    var $table = 'Atendimento';
    var $references = array(
        'Chamado',
    );
    //colunas
    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Chamado_i = null;
    var $Usuario_i = null;
    var $relatorio = '';
    var $dataRetorno = '';
    //colunas não alteráveis
    var $column_blocks = array('_i', '_d','Chamado_i','Usuario_i');

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

    //deleta (oculta um usuário se houver movimentação)
    public function delete($_i) {

        //array de verificação
        $check = array();

        //tabelas que serão analisadas
        $tables = $this->references;

        //pra cada tabela, veja se há registros deste _i
        foreach ($tables as $table) {
            $this->db->where($this->table . '_i', $_i);
            $query = $this->db->count_all($tables[$table]);
            if ($query != 0) {
                $check[$table] = $query;
            }
        }

        //se não houver registros, delete
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
