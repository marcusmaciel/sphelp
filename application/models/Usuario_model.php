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

    function __construct() {
        parent::__construct();
    }

    public function getById($_i = null) {

        //lista todos os usuários
        if ($_i == null) {
            $query = $this->db->get($this->table);
        };

        //lista somente o usuário que foi solicitado
        if ($_i != null) {
            $query = $this->db->get_where($this->table, array('_i' => $_i));
        };

        return $query->result();
    }

    //autentica os usuários
    public function getAutenticar($login, $senha) {

        //buscando usuários que estão ativos e que as informações listadas batem
        $query = $this->db->get_where($this->table, array('_s' => 'ativo', 'login' => $login, 'senha' => $senha));

        return $query->result();
    }

    public function post($data) {
        
    }

    public function put($data) {
        
    }

    public function delete($_i) {
        
    }
}
