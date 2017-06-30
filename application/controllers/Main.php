<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->model('Main_Model');
        $this->load->model('Video_Model');
    }

    public function index() {
        $data['chat'] = $this->Main_Model->get_chat();
        $this->load->view('header');
        $this->load->view('main/index', $data);
        $this->load->view('footer');
    }

    public function ressourcerie() {
        $data['videos'] = $this->Video_Model->get_videos();
        $this->load->view('header');
        $this->load->view('main/ressourcerie', $data);
        $this->load->view('footer');
    }

    public function get_video($id) {
        $data['video'] = $this->Video_Model->get_video($id);
        $data['coms'] = $this->Video_Model->get_comments($id);
        $this->load->view('header');
        $this->load->view('main/video', $data);
        $this->load->view('footer');
    }
    
    public function add_comment($video, $com){
         $data = array(
            'user_CO' => NULL,
            'video_CO' => $this->input->post('video'),
            'commentaire_CO' => $this->input->post('commentaire')
        );
         $this->Video_Model->set_comments($data);
         redirect('video/'.$video, 'refresh');
    }

    public function chat_refresh() {

        $this->Main_Model->add_chat(0, $this->input->post(1));
        $chat = $this->Main_Model->get_chat();
     
        $content = "";
        foreach ($chat as $mess):
            $content .= "<ul>" . $mess['id_user'] . ":" . $mess['content'] . "</ul>";
        endforeach;
        echo $content;
        return json_encode($content);
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
