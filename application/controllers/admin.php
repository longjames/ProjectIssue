<?php
	class admin extends Admin_Controller
	{
		public function index()
		{
			$this->load->view('admin/main');
		}

		public function show()
		{
			$this->load->model('project');
			$res = $this->project->getAll();
			$data['project'] = $res;
			$this->load->view('admin/list',$data);
		}

		public function detail()
		{
			$this->load->model('project');
			$id = $this->input->post('id');
			$data['project'] = $this->project->getProjectById($id);
			$this->load->view('admin/detail',$data);
		}

		public function add()
		{
			$title = $this->input->post('title');
			$money = $this->input->post('money');
			$period = $this->input->post('period');
			$description = $this->input->post('description');
			$this->load->model('project');
			if($this->project->addRecord($title, $money, $period, $description))
			{
				echo "添加成功";
			} else
			{
				echo "添加失败";
			}
		}

		public function remove()
		{
			$id = $this->input->post('id');
			$this->load->model('project');
			if($this->project->deleteRecord($id))
			{
				echo "删除成功";
			} else
			{
				echo "删除失败";
			}
		}

		public function modify()
		{
			$which = $this->input->post('which');
			$record = $this->input->post('record');
			$id = $this->input->post('id');
			$this->load->model('project');
			if($this->project->modifyRecord($id, $record, $which))
			{
				echo "修改成功";
			} else
			{
				echo "修改失败";
			}
		}
	}
?>