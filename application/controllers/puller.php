<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class puller extends CI_Controller {

	public function index()
	{
		$this->load->model('pullermodel');
		$data['puller_list']=$this->pullermodel->getallpuller();
		$this->load->view('puller_list',$data);
	}
}