<?php
class Post_model extends CI_Model{
    public $id;
    public $msg;
    public $datahora;

    public function __construct() {
        parent::__construct();
        $this->load->database();

    }

    public function inserir(){
        $dados = array ("msg" => $this -> msg);
        return $this->db->insert('post', $dados);
    }
    public function recuperar(){
        $this->db->order_by('datahora', 'asc');
        $query = $this->db->get('post');
        return $query->result();
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('post');
    }
    public function recuperarUm($id){
        $this->db->where('id', $id);
        $query = $this->db->get('post');
        return $query->row();
    }
    public function update(){
        $this->db->set('msg', $this->msg);
        $this->db->where('id', $this->id);
        $this->db->update('post');
    }

}

?>