                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php

class AtendimentoArquivo_model extends CI_Model {

    //tabela
    var $table = 'AtendimentoArquivo';
    var $references = array(
        'Chamado',
        'Historico'
    );
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


    //busca usando as informações enviadas
    public function get($data = array()) {

        foreach ($data as $key => $value) {
            $this->db->where($key, $value);
        }

        return $this->db->get($this->table)->result();
    }

    //cadastra um novo AtendimentoArquivo
    public function post($data) {

        //grava a informação no banco e pega o index criado
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

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

    //deleta um AtendimentoArquivo (físico e lógico)
    public function delete($_i) {

        //pega as informações do registro para poder apagar o arquivo fisico
        $data = $this->db->get($this->table, array('_i' => $_i));

        //remove o registro da base de dados
        $this->db->delete($this->table, array('_i' => $_i));

        //remove o arquivo do diretório
    }

}
