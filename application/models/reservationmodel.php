<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservationmodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallreservation()
        {
                $this->db->select('RES_NO,PID,GID');
                $this->db->from('RESERVATION');
                return $this->db->get()->result_array();
        }


}