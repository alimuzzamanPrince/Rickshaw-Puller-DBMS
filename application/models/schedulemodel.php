<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schedulemodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallschedule()
        {
                $this->db->select('RES_NO,RDATE,RTIME');
                $this->db->from('SCHEDULE');
                return $this->db->get()->result_array();
        }


}