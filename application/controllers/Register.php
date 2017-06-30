<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->model('User_Model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function add_account() {
        $data = array(
            'nom_US' => $this->input->post('fullname'),
            'prenom_US' => $this->input->post('prenom'),
            'pseudo_US' => $this->input->post('pseudo'),
            'password' => md5($this->input->post('password')),
            'mail_US' => $this->input->post('mail'),
            'role_US' => 4
        );
        $this->User_Model->set_account($data);
        redirect('login', 'refresh');
    }
    
    public function modif_account() {
        
        $data = array(
            'nom_US' => $this->input->post('fullname'),
            'prenom_US' => $this->input->post('prenom'),
            'pseudo_US' => $this->input->post('pseudo'), 
            'password' => md5($this->input->post('password')),
            'mail_US' => $this->input->post('mail'),
        );
        
        if($this->input->post('password')!= NULL){
            $data['password'] = $_SESSION['user']['password_US'];
        }
        $this->User_Model->set_account($data);
        redirect('', 'refresh');
    }
    
    public function account() {
        $this->load->view('header');
        $this->load->view('account');
        $this->load->view('footer');
    }

    public function validation_form() {
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[3]|alpha_dash', array(
            'required' => 'Le nom est necessaire',
            'trim' => 'Les caractères spéciaux ne sont pas autorisé',
            'min_length' => 'Le nom doit faire 3 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));
        $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[3]|alpha_dash', array(
            'required' => 'Le nom est necessaire',
            'trim' => 'Les caractères spéciaux ne sont pas autorisé',
            'min_length' => 'Le nom doit faire 3 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));
        $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|min_length[3]|alpha_dash', array(
            'required' => 'Le nom est necessaire',
            'trim' => 'Les caractères spéciaux ne sont pas autorisé',
            'min_length' => 'Le nom doit faire 3 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[Email.Email]', array(
            'required' => 'Vous devez saisir un email.',
            'is_unique' => 'Cette adresse mail est déjà utilisée'
        ));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash', array(
            'required' => 'Vous devez saisir un mot de passe.',
            'min_length' => 'Le mot de passe doit faire 5 caractères minimum',
            'alpha_dash' => 'Le mot de passe ne doit contenir que des caractères alpha-numérique, des _ ou des -'
        ));


        if ($this->form_validation->run() == false) {
            $this->load->view('home_view');
        } else {
            redirect(base_url('index.php/home_view'), 'refresh');
        }
    }

}
