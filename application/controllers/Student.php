<?php

class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Mdl_student');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('studentAdd');
	}

	public function addstudent()
	{
		$name=$this->input->post('name');
		$rollno=$this->input->post('rollno');
		$address=$this->input->post('address');
		$data=array(
			'stname'=>$name,
			'strollno'=>$rollno,
			'staddr'=>$address
		);
		if($this->Mdl_student->addstudent($data))
		{
			echo "<h1>Success</h1>";
		}
		else
		{
			echo "<h1>Failed</h1>";
		}
	}

	public function viewstudent()
	{
		$students['data']=$this->Mdl_student->getstudents();
		$this->load->view('studentView',$students);
	}

	public function rollno_check()
	{
		$rollno = $this->uri->segment(3);
		$data= array('strollno'=>$rollno);
		if($this->Mdl_student->rollno_check($data))
		{
			echo 'exist';
		}
		else
		{
			echo 'ok';
		}
	}
}

?>