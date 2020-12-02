<?php
class Produk extends CI_Controller{
   
    function __construct(){
        parent::__construct();
        $this->load->model('m_produk');
        
    }
    function index(){
        $this->load->view('v_produk');
    }
 
    function data_produk(){
        $data=$this->m_produk->produk_list();
        echo json_encode($data);
    }
 
    function get_produk(){
        $kopro=$this->input->get('id');
        $data=$this->m_produk->get_produk_by_kode($kopro);
        echo json_encode($data);
    }
 
    function simpan_produk(){
        $kopro=$this->input->post('kopro');
        $napro=$this->input->post('napro');
        $harga=$this->input->post('harga');
        $data=$this->m_produk->simpan_produk($kopro,$napro,$harga);
        echo json_encode($data);
    }
 
    function update_produk(){
        $kopro=$this->input->post('kopro');
        $napro=$this->input->post('napro');
        $harga=$this->input->post('harga');
        $data=$this->m_produk->update_produk($kopro,$napro,$harga);
        echo json_encode($data);
    }
 
    function hapus_produk(){
        $kopro=$this->input->post('kode');
        $data=$this->m_produk->hapus_produk($kopro);
        echo json_encode($data);
    }
 
}