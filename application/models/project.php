<?php

	class project extends CI_Model
	{
		public function getAll()
		{
			return $this->db->get('projects')->result();
		}

		public function getProjectById($id)
		{
			return $this->db->where('id',$id)->get('projects')->row();
		}

		public function addRecord($title, $money, $period, $description)
		{
			$bool = false;
			$data = array(
				'id'=>null,
				'title'=>$title,
				'money'=>$money,
				'distime'=>null,
				'period'=>$period,
				'description'=>$description
				);
			try {
				$bool = $this->db->insert('projects',$data);
			} catch (Exception $e) {
				$bool = false;
			}
			return $bool;
		}

		public function deleteRecord($id)
		{
			$bool = false;
			try {
				$bool = $this->db->where('id',$id)->delete('projects');
			} catch (Exception $e) {
				$bool = false;
			}
			return $bool;
		}

		public function modifyRecord($id, $record, $which)
		{
			$bool = false;
			$data = array (
				$which => $record
				);
			try {
				$bool = $this->db->update('projects', $data, array('id'=>$id));
			} catch (Exception $e) {
				$bool = false;
			}
			return $bool;
		}
	}
?>