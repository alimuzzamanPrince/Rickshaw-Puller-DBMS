<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rrickshawmodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getallrrickshaw()
        {
                $this->db->select('GID,PRICE,REG_NO');
                $this->db->from('RICKSHAW');
                return $this->db->get()->result_array();
        }


}