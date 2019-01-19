<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class passengermodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallpassenger()
        {
                $this->db->select('PSS_NO,NAME,NID,PHONE,ADDRESS,RES_NO');
                $this->db->from('PASSENGER');
                return $this->db->get()->result_array();
        }


}