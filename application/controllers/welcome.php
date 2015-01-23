<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('project');
		$data['projects'] = $this->project->getAll();
		$this->load->view('user/show',$data);
	}

	public function search()
	{
		$this->load->model('project');
		$res = $this->project->getAll();
		
		$project = ();
		foreach($res as $item)
		{
			//按照标题和描述筛选内容 分词等技术
			if(true)
			{
				$project[] = $item;
			}
		}

		$data['project'] = $project;
		$this->load->view('user/show',$data);
	}
}
