<?php
	class backend extends CI_Controller
	{
		public function login()
		{
			if($_SERVER['REQUEST_METHOD']=="POST")
			{
				$this->load->library('session');
				$flag = 0;
				$name = $this->input->post('user');
				$password = $this->input->post('password');
				$password = md5($password);
				$this->load->model('administrator');
				$res = $this->administrator->getName();
				foreach($res as $item)
				{
					if($item->name == $name)
						$flag = 1;
				}
				if($flag == 0) 
					redirect(site_url('backend/login','refresh'));
				$flag = 0;
				$res = $this->administrator->getPassword();
				foreach($res as $item)
				{
					if($item->password == $password)
						$flag = 1;

				}
				if($flag == 1)
				{
					$this->session->set_userdata('token','in');
					redirect(site_url('admin/index','refresh'));
				}
			} else
			{
				$this->load->view('admin/login');
			}
		}

		public function logout()
		{
			$this->load->library('session');
			if($this->session->userdata('token') == 'in')
			{
				$this->session->set_userdata('token','out');
			}
			redirect(site_url('backend/login'),'refresh');
		}
	}
?>