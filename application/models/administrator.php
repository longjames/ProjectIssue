<?php
	class administrator extends CI_Model
	{
		public function getName()
		{
			return $this->db->select('name')->get('admin')->result();
		}

		public function getPassword()
		{
			return $this->db->select('password')->get('admin')->result();
		}
	}
?>