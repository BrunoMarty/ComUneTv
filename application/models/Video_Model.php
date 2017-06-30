<?php

class Video_Model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

   public function get_videos() {
        $query = $this->db->get('video');
        return $query->result_array();
    }
    
}
