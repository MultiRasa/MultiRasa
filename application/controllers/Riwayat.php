<?php 
class Riwayat extends CI_Controller{
	public function index (){
		//if($this->session->userdata('username')){
	//		$data['riwayat'] = $this->m_riwayat->data();
				$this->load->view('element/header');
				$this->load->view('v_riwayat');
				$this->load->view('element/footer');
			}//else{
		//		redirect('Login');
			//}
	//}
}
?>