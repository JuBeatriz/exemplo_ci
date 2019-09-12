<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuiter extends CI_Controller {


	public function index()
	{
		$this->load->view('nav');
		$this->load->view('conteudo');
		$this->load->view('rodape');


	}
	public function timeline ()
	{
		$this->load->model('Post_model');
		$dados ['posts'] = $this->Post_model->recuperar();
        $this->load->view('nav');
		$this->load->view('timeline', $dados);
		$this->load->view('rodape');
	}	
	
	public function tuitar ()
	{
        $this->load->view('nav');
		$this->load->view('tuitar');
		$this->load->view('rodape');
		
	}
	public function salvar(){
		$this->load->model('Post_model');
		$msg = $_POST["mensagem"];
		$this->Post_model->msg = $msg;
		$this->Post_model->inserir();
		redirect ('tuiter/timeline');
	}

	public function excluir(){
		$this->load->model('Post_model');
		$id = $this->uri->segment(3);
		$this->Post_model->delete ($id);
		redirect ('tuiter/timeline');
	}
	public function editar(){
		$this->load->model('Post_model');
		$id = $this->uri->segment(3);
		$dados['post'] = $this->Post_model->recuperarUm($id);
		
		$this->load->view('nav');
		$this->load->view('editar', $dados);
		$this->load->view('rodape');
	}
	public function atualizar(){
		$this->load->model('Post_model');
		$this->Post_model->id = $_POST ["id"];
		$this->Post_model->msg = $_POST["mensagem"];
		$this->Post_model->update();
		redirect('tuiter/timeline');
	}
}
