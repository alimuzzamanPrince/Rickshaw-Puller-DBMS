<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class owner extends CI_Controller {

	public function index()
	{
		$this->load->model('ownermodel');
		$data['owner_list']=$this->ownermodel->getallowner();
		$this->load->view('owner_list',$data);
	}
}