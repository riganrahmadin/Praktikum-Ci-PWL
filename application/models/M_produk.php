<?php
class M_produk extends CI_Model{
    public function get_produk(){
        return $this->db->get('tbl_produk');
    }
    public function get_produk_by_harga($harga){
        return  $this->db->get_where('tbl_produk',array('harga > '=>$harga));
    }
    public function insert_produk($data){
        $this->db->insert('tbl_produk',$data);
    }
    public function update_produk($data,$id){
        $this->db->where('idProduk',$id);
        $this->db->update('tbl_produk',$data);
    }
    public function hapus_produk($id)  {
        $this->db->where('idProduk', $id);
        $this->db->delete('tbl_produk');
    }
    public function get_data_by_id($id){
        return  $query = $this->db->get_where('tbl_produk', array('idProduk' => $id));
        return  $query->row_array();
    }
}

?>