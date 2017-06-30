<?php

class User_Model extends CI_Model {

    public function __construct() {
         $this->load->helper('url');
        $this->load->database();
    }

  function login($email, $password) {
       $query = $this->db->get_where('user', array('mail_US' => $email, 'password' => md5($password)));
       if ($query->row_array()!= null) {
           return $query->row_array();
       }
       return 0;
   }

  public function set_account($data) {
      if($_SESSION['user']){
            $this->db->where('id_US', $_SESSION['user']['id_US']);
            return $this->db->update('user', $data);
      }else
        return $this->db->insert('user', $data);
    }
     }
