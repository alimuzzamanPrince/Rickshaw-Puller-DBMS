<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class garage extends CI_Controller {

	public function index()
	{
		$this->load->model('garagemodel');
		$data['garage_list']=$this->garagemodel->getallgarage();
		$this->load->view('garage_list',$data);
	}
}