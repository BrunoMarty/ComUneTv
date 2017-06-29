<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
     public function __construct() {

        parent::__construct();
        $this->load->model('Main_Model');
        $this->load->helper('url_helper');
    }


	public function index()
	{
                $data['chat'] = $this->Main_Model->get_chat();
                $this->load->view('header');
		$this->load->view('main/index',$data);
                $this->load->view('footer');
	}
        
        public function chat_refresh()
        {
            
            $this->Main_Model->add_chat(0,$this->input->post(1));
            $chat = $this->Main_Model->get_chat();
            print_r($chat);
            $content ="";
            foreach($chat as $mess):
                $content += "<ul>".$mess['id_user'].":".$mess['content']."</ul>";
            endforeach;
            echo $content;
            return json_encode("toto");
        }
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

