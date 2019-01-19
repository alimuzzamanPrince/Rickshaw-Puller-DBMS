<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gmaintenance extends CI_Controller {

	public function index()
	{
		$this->load->model('gmaintenancemodel');
		$data['gmaintenance_list']=$this->gmaintenancemodel->getallgmaintenance();
		$this->load->view('gmaintenance_list',$data);
	}
}