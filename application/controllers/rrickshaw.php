<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rrickshaw extends CI_Controller {

	public function index()
	{
		$this->load->model('rrickshawmodel');
		$data['rrickshaw_list']=$this->rrickshawmodel->getallrrickshaw();
		$this->load->view('rrickshaw_list',$data);
	}
}