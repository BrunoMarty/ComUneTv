<?php

class Video_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_videos() {
        $query = $this->db->get('video');
        return $query->result_array();
    }

    public function get_video($id) {
        $query = $this->db->get_where('video', array('id_VI' => $id));
        return $query->row_array();
    }
    
    public function get_comments($id) {
        $query = $this->db->get_where('commentaire', array('video_CO' => $id));
        return $query->result_array();
    }
    
    public function set_comments($data) {
         return $this->db->insert('commentaire', $data);
    }

}
