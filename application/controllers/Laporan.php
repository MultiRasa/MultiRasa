<?php
class Laporan extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Laporan');
		$this->model = $this->Model_Laporan;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}
	
	public function read(){
		$rows=$this->model->read();
		$this->load->view('LAPORAN/crud_read_view', ['rows'=>$rows]);
	}
	
}



?>
