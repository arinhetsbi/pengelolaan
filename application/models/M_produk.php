<?php
class M_produk extends CI_Model{
 
    function produk_list(){
        $hasil=$this->db->query("SELECT * FROM tbl_produk");
        return $hasil->result();
    }
 
    function simpan_produk($kopro,$napro,$harga){
        $hasil=$this->db->query("INSERT INTO tbl_produk (produk_kode,produk_nama,produk_harga)VALUES('$kopro','$napro','$harga')");
        return $hasil;
    }
 
    function get_produk_by_kode($kopro){
        $hsl=$this->db->query("SELECT * FROM tbl_produk WHERE produk_kode='$kopro'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'produk_kode' => $data->produk_kode,
                    'produk_nama' => $data->produk_nama,
                    'produk_harga' => $data->produk_harga,
                    );
            }
        }
        return $hasil;
    }
 
    function update_produk($kopro,$napro,$harga){
        $hasil=$this->db->query("UPDATE tbl_produk SET produk_nama='$napro',produk_harga='$harga' WHERE produk_kode='$kopro'");
        return $hasil;
    }
 
    function hapus_produk($kopro){
        $hasil=$this->db->query("DELETE FROM tbl_produk WHERE produk_kode='$kopro'");
        return $hasil;
    }
     
}