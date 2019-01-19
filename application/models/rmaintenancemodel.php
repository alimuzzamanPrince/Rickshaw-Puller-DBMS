<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rmaintenancemodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallrmaintenance()
        {
                $this->db->select('RREG_NO,COST,REASON,RDATE');
                $this->db->from('R_MAINTENANCE');
                return $this->db->get()->result_array();
        }


}