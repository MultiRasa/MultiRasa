<?php 
class Produk extends CI_Controller{

public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_produk');
		$this->model = $this->m_produk;
	}
	public function index(){
		$data = array( 'data' => $this->model->get_data());
		$this->load->view('element/header');
		$this->load->view('v_produk', $data);
		$this->load->view('element/footer');
	}

	public function detail(){
		//$data = array( 'data' => $this->model->get_detail());
		$this->load->view('element/header');
		$this->load->view('v_d_produk');
		$this->load->view('element/footer');	
	}
}
?>