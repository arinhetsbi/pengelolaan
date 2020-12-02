<?php 

class Owner extends CI_Controller{
    public function index(){

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/Owner');
        $this->load->view('templates_admin/footer');
    }
}

?>

  