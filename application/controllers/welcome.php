<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function login()
	{
		
	}
	public function index()
	{
		$this->load->model('project');
		$data['projects'] = $this->project->getAll();
		$this->load->view('list',$data);
	}
}
