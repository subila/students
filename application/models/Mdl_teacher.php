<?php

class Mdl_teacher extends CI_Model
{
	
	public function addteacher($data)
	{
		if($this->db->insert('teachers',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getteacher()
	{
		$res=$this->db->get('teachers');
		if($row=$res->result_array())
		{
			return $row;
		}
		else
		{
			return false;
		}
	}

}
?>