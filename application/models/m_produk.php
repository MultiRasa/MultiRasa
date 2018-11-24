<?php
class m_produk extends CI_Model {
    
  function get_data(){
    $query = $this->db->query("SELECT * FROM kategori ");
    return $query->result();
  }

  function get_detail(){
    $query = $this->db->query("SELECT * FROM roti JOIN kategori WHERE roti.id_kategori=kategori.id_kategori");
    return $query->result();
  }

}

?>