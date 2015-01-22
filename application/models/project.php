<?php

	class project extends CI_Model
	{
		public function getAll()
		{
			return $this->db->get('projects')->result();
		}
	}
?>