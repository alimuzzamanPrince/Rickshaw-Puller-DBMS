<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ownermodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallowner()
        {
                $this->db->select('GID,FIRST_NAME,LAST_NAME,NID,PHONE');
                $this->db->from('OWNER');
                return $this->db->get()->result_array();
        }


}