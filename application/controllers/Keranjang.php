<?php 
class Keranjang extends CI_Controller{
	public function index(){
		$this->load->view('element/header');
		$this->load->view('v_keranjang');
		$this->load->view('element/footer');
	}
}
?>