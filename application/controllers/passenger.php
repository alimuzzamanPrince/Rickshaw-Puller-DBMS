<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class passenger extends CI_Controller {

	public function index()
	{
		$this->load->model('passengermodel');
		$data['passenger_list']=$this->passengermodel->getallpassenger();
		$this->load->view('passenger_list',$data);
	}
}