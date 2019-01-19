<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rmaintenance extends CI_Controller {

	public function index()
	{
		$this->load->model('rmaintenancemodel');
		$data['rmaintenance_list']=$this->rmaintenancemodel->getallrmaintenance();
		$this->load->view('rmaintenance_list',$data);
	}
}