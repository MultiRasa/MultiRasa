<?php
class Roti extends CI_Controller{

	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Roti');
		$this->model = $this->Model_Roti;

		$this->load->database();
		$this->load->helper('url');

	}
	public function index(){
		$this->read();
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_roti = $_POST['id_roti'];
			$this->model->id_kategori = $_POST['id_kategori'];
			$this->model->nama_roti = $_POST['nama_roti'];
			$this->model->harga = $_POST['harga'];
			$this->model->insert();
			redirect('Roti');
		}else{
			$this->load->view('ROTI/crud_create_view', ['model'=>$this->model] );
		}
	}
	
	public function read(){
		$id = $this->uri->segment(3);
		$rows=$this->model->read($id);
		$this->load->view('ROTI/crud_read_view', ['rows'=>$rows]);
	}
	public function update($id_roti_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_roti = $_POST['id_roti'];
			$this->model->id_kategori = $_POST['id_kategori'];
			$this->model->nama_roti = $_POST['nama_roti'];
			$this->model->harga = $_POST['harga'];
			$this->model->update();
			redirect('Roti');
		}else{
			$query=$this->db->query("SELECT * FROM roti WHERE id_roti='$id_roti_up'");
			$row=$query->row();
			$this->model->id_roti=$row->id_roti;
			$this->model->id_kategori=$row->id_kategori;
			$this->model->nama_roti=$row->nama_roti;
			$this->model->harga=$row->harga;
			$this->load->view('ROTI/crud_update_view', ['model'=>$this->model]);
		}

	}
	public function delete ($id_roti_del){
		$this->model->id_roti=$id_roti_del;
		$this->model->delete();
		redirect('Roti');
	}
}



?>