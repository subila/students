<?php

class Mdl_student extends CI_Model
{
	
	public function addstudent($data)
	{
		if($this->db->insert('students',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getstudents()
	{
		$res=$this->db->get('students');
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