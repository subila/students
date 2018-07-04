<?php

class Teacher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Mdl_teacher');
	}

	public function index()
	{
		$this->load->view('teacheradd');
	}

	public function addteacher()
	{
		$name=$this->input->post('name');
		$section=$this->input->post('section');
		$address=$this->input->post('address');
		$data=array(
			'trname'=>$name,
			'trsection'=>$section,
			'traddr'=>$address
		);
		if($this->Mdl_teacher->addteacher($data))
		{
			echo "<h1>Success</h1>";
		}
		else
		{
			echo "<h1>Failed</h1>";
		}
	}

	public function viewteacher()
	{
		// $this->load->view('studentAdd');
		$teachers['data']=$this->Mdl_teacher->getteachers();
		$this->load->view('teacherView',$teacher);
	}
}

?>