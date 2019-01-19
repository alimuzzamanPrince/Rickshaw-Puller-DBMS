<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountmodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallaccount()
        {
                $this->db->select('GID,RREG_NO,DAY,RENT');
                $this->db->from('ACCOUNT');
                return $this->db->get()->result_array();
        }


}