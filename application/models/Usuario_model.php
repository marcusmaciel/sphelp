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
        //lista somente o usuário que foi solicitado se pedir
        if ($_i != null) {
            $this->db->where('_i', $_i);
        };
        return $this->db->get($this->table)->result();
    }

    //busca pelo status
    public function getBy_s($_s = 'ativo') {
        return $this->db->get_where($this->table, array('_s' => $_s))->result();
    }

    //busca por data criado (entre 2 _d)
    public function getBy_d($dataIni, $dataEnd) {
        $this->db->where('_d >=', $dataIni);
        $this->db->where('_d <=', $dataEnd);
        return $this->db->get($this->table)->result();
    }

    //busca pelo login
    public function getByLogin($login) {
        return $this->db->get_where($this->table, array('login' => $login))->result();
    }

    //autentica os usuários
    public function getAutenticar($login, $senha) {
        return $this->db->get_where($this->table, array('_s' => 'ativo', 'login' => $login, 'senha' => $senha))->result();
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
