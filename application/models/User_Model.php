<?php

class User_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }


  //   public function verif_connect($password, $email) {
  //
  //   $query = $this->db->get_where('user', array('mail_US' => $email, 'password_US' => md5($password)));
  // if ($query->row_array()!= null) {
  //     return $query->row_array();
  //     return 0;
  //     }
  //
  //    public function insert_user()
  //    {

  function login($email, $password) {
      $this->db->select('email_US,password_US');
      $this->db->from('CUT');
      $this->db->where('mail_US', $email);
      $this->db->where('password_US', md5($password));
      $this->db->limit(1);

      $query = $this->db->get();
      if($query->num_rows()==1){
          return $query->result();
      } else {
          return false;
      }
   }


     }
