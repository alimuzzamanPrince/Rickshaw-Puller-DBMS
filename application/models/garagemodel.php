<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class garagemodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallgarage()
        {
                $this->db->select('GID,ADDRESS');
                $this->db->from('GARAGE');
                return $this->db->get()->result_array();
        }


}