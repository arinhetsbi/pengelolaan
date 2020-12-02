<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller 
{
	
		function index()
		{
			$this->load->view('v_web');
			$this->load->helper('url');		
	}
}

?> 