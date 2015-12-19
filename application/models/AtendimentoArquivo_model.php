                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php

class AtendimentoArquivo_model extends CI_Model {

    //tabela
    var $table = 'AtendimentoArquivo';
    //colunas
    var $_i = null;
    var $_s = '';
    var $_d = '';
    var $Atendimento_i = null;
    var $descricao = '';
    var $url = '';
    //colunas não alteráveis
    var $column_blocks = array('_i', '_d', 'Atendimento_i', 'url');
    //configurações de upload de arquivos
    var $config = array(
        'upload_path' => './uploads/',
        'allowed_types' => 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|bak|jpeg|txt|xml',
        'file_ext_tolower' => true
    );

    function __construct() {
        parent::__construct();
    }

    //busca pelo _i (1 ou todos)
    public function getById($_i = null) {

        //se houver um index específico, procure por ele
        if ($_i != null) {

            $this->db->where('_i', $_i);
        };

        return $this->db->get($this->table)->result();
    }

    //busca pelo Atendimento_i
    public function getByAtendimento($Atendimento_i) {

        //procura pelo index do atendimento
        $this->db->where('Atendimento_i', $Atendimento_i);

        return $this->db->get($this->table)->result();
    }

    //busca pela descricao
    public function getByDescricao($descricao) {

        $this->db->where('descricao', $descricao);

        return $this->db->get($this->table)->result();
    }

    //busca pela url
    public function getByUrl($url) {

        $this->db->where('url', $url);

        return $this->db->get($this->table)->result();
    }

    //cadastra um novo AtendimentoArquivo
    public function post($data) {

        //grava a informação no banco e pega o index criado
        $this->db->insert($this->table, $data);
        $insert_id = $this->insert_id();

        //busca o registro inserido para criar o nome do arquivo com o 
        //index do chamado pai daquele atendimento
        $this->db->select('AtendimentoArquivo.*, Atendimento.Chamado_i');
        $this->db->from($this->table);
        $this->db->join('Atendimento', 'Atendimento._i = AtendimentoArquivo.Atendimento_i');
        $row = $this->db->get($this->table, array('_i', $insert_id))->result();

        //criando o nome do arquivo
        $name = date('YmdHis', strtotime($row->_d)) . '=';
        $name += $row->Chamado_i . '=';
        $name += $row->Atendimento_i . '=';
        $name += $row->_i;

        return [$insert_id, $name];
    }

    //atualiza AtendimentoArquivo
    public function put($data) {

        //define o index de update
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

    //deleta um AtendimentoArquivo (físico e lógico)
    public function delete($_i) {

        //pega as informações do registro para poder apagar o arquivo fisico
        $data = $this->db->get($this->table, array('_i' => $_i));
        
        //remove o registro da base de dados
        $this->db->delete($this->table, array('_i' => $_i));

        //remove o arquivo do diretório
    }

}
