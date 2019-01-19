<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schedule extends CI_Controller {

	public function index()
	{
		$this->load->model('schedulemodel');
		$data['schedule_list']=$this->schedulemodel->getallschedule();
		$this->load->view('schedule_list',$data);
	}
}