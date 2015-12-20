<?php

class Historico_model extends CI_Model {

    //tabela
    var $table = 'Historico';
    //colunas
    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Usuario_i = null;
    var $acao = '';
    var $conteudo = '';
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

    //cadastra um novo historico
    public function post($data) {

        //insere na tabeça
        $this->db->insert($this->table, $data);

        return $this->insert_id();
    }

    //public function put($data) {} #histórico não deve ser atualizado
    
    //remove registros com base nos filtros enviados
    public function delete($data = array()) {

        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }

        $this->db->delete($this->table);

        return $this->db->affected_rows();
    }

}
