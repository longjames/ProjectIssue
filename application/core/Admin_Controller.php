<?php
	class Admin_Controller extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			if($this->session->userdata('token')!= 'in')
			{
				redirect(site_url('backend/login'),'refresh');
			}
		}
	}