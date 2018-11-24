<?php
class Model_Pesanan extends CI_Model {
    
    function get_table(){
        return $this->db->get("pesanan");
    }
    
    function read(){
        $query = $this->db->query("SELECT * FROM transaksi JOIN pesanan JOIN detail_pesan JOIN pelanggan WHERE  transaksi.id_transaksi=pesanan.id_transaksi AND pesanan.id_pesanan=detail_pesan.id_pesanan AND pesanan.id_pelanggan=pelanggan.id_pelanggan AND transaksi.status='LUNAS' ");
        return $query->result();
    }
    
     function home($id){
        $query = $this->db->query("SELECT * FROM transaksi JOIN pesanan JOIN detail_pesan JOIN pelanggan JOIN roti WHERE  transaksi.id_transaksi=pesanan.id_transaksi AND pesanan.id_pesanan=detail_pesan.id_pesanan AND pesanan.id_pelanggan=pelanggan.id_pelanggan AND roti.id_roti=detail_pesan.id_roti AND transaksi.status='LUNAS' AND transaksi.id_transaksi='$id' ");
        return $query->result();
    }

    function cari($nama_pelanggan){
        $query = $this->db->query("SELECT * FROM pesanan JOIN pelanggan  WHERE pesanan.id_pelanggan=pelanggan.id_pelanggan AND pelanggan.nama_pelanggan='$nama_pelanggan'");
        return $query->result();
    }
  
    function delete($id_transaksi_del){
        $sql=sprintf("DELETE FROM transaksi WHERE id_transaksi='%s'", $this->id_transaksi);
        $this->db->query($sql);
    }
    

    
}