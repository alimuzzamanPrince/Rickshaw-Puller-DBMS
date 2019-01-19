<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservation extends CI_Controller {

	public function index()
	{
		$this->load->model('reservationmodel');
		$data['reservation_list']=$this->reservationmodel->getallreservation();
		$this->load->view('reservation_list',$data);
	}
}