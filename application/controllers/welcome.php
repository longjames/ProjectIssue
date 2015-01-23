<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('user/main');
	}

	public function show()
	{
		$this->load->model('project');
		$data['projects'] = $this->project->getAll();
		$this->load->view('user/list',$data);
	}

	public function search()
	{
		$this->load->model('project');
		$res = $this->project->getAll();

		$projects = array();
		foreach($res as $item)
		{
			//按照标题和描述筛选内容 分词等技术
			if(true)
			{
				$projects[] = $item;
			}
		}

		$data['projects'] = $projects;
		$this->load->view('user/list',$data);
	}
}
?>