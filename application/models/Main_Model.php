<?php

class Main_Model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

   public function get_chat() {
        $query = $this->db->get('chat');
        return $query->result_array();
    }
    
      public function add_chat($user,$texte) {
          $data = array(
              'id_user' => $user,
              'content' => $texte    
      );
        return $this->db->insert('chat', $data);            
    }
}
