<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pullermodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallpuller()
        {
                $this->db->select('PID,GID,NAME,NID,ADDRESS');
                $this->db->from('PULLER');
                return $this->db->get()->result_array();
        }


}