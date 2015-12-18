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

    //busca pelo _i (1 ou todos)
    public function getBy_i($_i = null) {
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

    //busca pelo status
    public function getBy_s($_s = 'ativo') {
        $query = $this->db->get_where($this->table, array('_s' => $_s));
        return $query->result();
    }

    //busca por data criado (entre 2 _d)
    public function getBy_d($dataIni, $dataEnd) {
        $query = $this->db->get_where($this->table, array(
            '_d <=' => $dataIni,
            '_d >=' => $dataEnd))
        ;
        return $query->result();
    }

    //busca pelo login
    public function getByLogin($login) {
        $query = $this->db->get_where($this->table, array('login' => $login));
        return $query->result();
    }

    //autentica os usuários
    public function getAutenticar($login, $senha) {

        //buscando usuários que estão ativos e que as informações listadas batem
        $query = $this->db->get_where($this->table, array('_s' => 'ativo', 'login' => $login, 'senha' => $senha));

        return $query->result();
    }

    //cadastra um novo usuário
    public function post($data) {
        
    }

    //atualiza um usuário
    public function put($data) {
        
    }

    //deleta (oculta um usuário)
    public function delete($_i) {
        
    }
}
