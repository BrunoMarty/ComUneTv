<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
     public function __construct() {

        parent::__construct();
        $this->load->helper('url_helper');
    }


	public function index()
	{
                $this->load->view('header');
		$this->load->view('main/index');
                $this->load->view('footer');
	}
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

