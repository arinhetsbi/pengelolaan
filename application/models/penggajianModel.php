<?php 


class PenggajianModel extends CI_model
{
	
	public function get_data($table) //mengambil dari ariabel tabel 
	{
		return $this->db->get($table);
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data); 
	}
}

 ?>