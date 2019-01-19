<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gmaintenancemodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallgmaintenance()
        {
                $this->db->select('GID,RENT,WATER_BILL,ELEC_BILL,OTHER_BILL,MONTH,YEAR');
                $this->db->from('G_MAINTENANCE');
                return $this->db->get()->result_array();
        }


}