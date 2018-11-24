<?php
class Komentar extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Komentar');
		$this->model = $this->Model_Komentar;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}

	
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('KOMENTAR/crud_read_view', ['rows'=>$rows]);
	}
	
	public function delete ($id_komentar_del){
		$this->model->id_komentar=$id_komentar_del;
		$this->model->delete();
		redirect('Komentar');
	}
}



?>