<?php

class Dashboard extends CI_Controller {
    public function index()
{
	$data['title'] = "APP Pengelolaan Klinik";
	$pegawai = $this->db->query("SELECT * FROM data_pegawai"); //membuat query
	$admin = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'admin'");
	$jabatan = $this->db->query("SELECT * FROM data_jabatan");
	$kehadiran = $this->db->query("SELECT * FROM data_kehadiran");
	$data['pegawai']=$pegawai->num_rows(); //untuk tampil jumlah data kmudian di iews admin dashboard di eho $pegawai (num rows mengambl jml brs)
	$data['admin']=$admin->num_rows();
	$data['jabatan']=$jabatan->num_rows();
	$data['kehadiran']=$kehadiran->num_rows();
	$this->load->view('templates_admin/header', $data);
	$this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
}
}
?> 
  