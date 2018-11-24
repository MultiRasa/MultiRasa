<?php
class Model_Roti extends CI_Model{
	public $id_roti;
	public $id_kategori;
	public $nama_roti;
	public $harga;
	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}

public function insert (){
	$sql = sprintf("INSERT INTO roti VALUES ('%s','%s','%s','%d')",
			$this->id_roti,
			$this->id_kategori,
			$this->nama_roti,
			$this->harga);
	$this->db->query($sql);
}

public function delete(){
	$sql=sprintf("DELETE FROM roti WHERE id_roti='%s'", $this->id_roti);
	$this->db->query($sql);
}
public function read($id){
	$sql= "SELECT * FROM roti JOIN kategori WHERE roti.id_kategori=kategori.id_kategori AND roti.id_kategori
	='$id' ORDER BY id_roti";
	$query = $this->db->query($sql);
	return $query->result();
}



function cari($nama_roti){
		$query = $this->db->query("SELECT * FROM roti JOIN kategori WHERE roti.id_kategori=kategori.id_kategori ORDER BY id_roti AND roti.nama_roti='$nama_roti'");
		return $query->result();
	}

private function _attributeLabels(){
	return[
		'id_roti'=>'ID Roti  ',
		'id_kategori'=>'ID Kategori ',
		'nama_roti'=>'Nama ',
		'harga'=>'Harga  ',
	];
}

}


?>