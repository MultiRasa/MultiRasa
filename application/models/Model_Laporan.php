<?php
class Model_Laporan extends CI_Model {
    
    function get_table(){
        return $this->db->get("transaksi");
    }
    
    function read(){
        $query = $this->db->query("SELECT * FROM transaksi JOIN pesanan JOIN detail_pesan JOIN pelanggan WHERE  transaksi.id_transaksi=pesanan.id_transaksi AND pesanan.id_pesanan=detail_pesan.id_pesanan AND pesanan.id_pelanggan=pelanggan.id_pelanggan AND transaksi.status='LUNAS'");
        return $query->result();
    }

    function total(){
    	$query = $this->db->query("SELECT SUM(total) AS total FROM transaksi"); 
    }
    

    
}