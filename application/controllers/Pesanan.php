<?php
class Pesanan extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Pesanan');
		$this->model = $this->Model_Pesanan;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('PESANAN/crud_read_view', ['rows'=>$rows]);
	}
	public function home(){
		$id = $this->uri->segment(3);
		$rows=$this->model->home($id);
		$this->load->view('PESANAN/detail', ['rows'=>$rows]);
	}
	
	public function delete ($id_transaksi_del){
		$this->model->id_transaksi=$id_transaksi_del;
		$this->model->delete();
		redirect('Pesanan');
	}

}



?>