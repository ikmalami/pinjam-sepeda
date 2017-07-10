<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this -> load ->helper('text');
		$this -> load ->helper('form');
		$this -> load ->library('form_validation');

		$this -> load ->model('gui_model');
        $this -> load -> helper('url');
		//$this->load->helper('captcha');
	}

	function index() {	
    	if (isset($this->session->userdata['logged_in'])) {
                   redirect('index.php/login/home');
        } 
    	$this->load->view('homepage_view');
        
    }

    function registrasi() {
    		$this->form_validation->set_message('is_unique', 'The %s is already taken');

    	  	$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('pass', 'Nama', 'trim|required');
           

            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $pass = $this->input->post('pass');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('homepage_view');
            } else {
            	$data = array (
            		'email' => $email,
            		'nama' => $nama,
            		'pass' => $pass
            		);
            	$this->gui_model->InsertUser($data);
            	redirect('');
            }

    }
    
    public function masuk() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        //ketika sudah login maka akan ke redirect ke /timeline

        if ($this->form_validation->run() == FALSE) {
            if (isset($this->session->userdata['logged_in'])) {
                redirect('timeline');
            } else {
                redirect('login');
            }
        } else {

                $usernya = $this->input->post('username');
                $passnya = $this->input->post('password');
                $data = array(
                    'username' => $usernya,
                    'password' => $passnya
                );
                
                $result = $this->gui_model->ceklogin($data);
                if ($result == TRUE) {
                    $username = $this->input->post('username');
                    $result = $this->gui_model->bacainfo($username);
                    if ($result != false) {



                        $session_data = array(
                            'email' => $result[0]->email,
                            'nama' => $result[0]->nama,
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        redirect('index.php/login/home');

                        
                    }
                } else {
                    redirect('index.php/login/loginfail');
                }
            }
        
    }
    
    public function logout() {
        
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        redirect('');
    }
    
   public function loginfail() {
       $data['error'] = 'Username atau password salah';
       $this->load->view('homepage_view', $data);
       
   }

   public function home() {
   		if (!isset($this->session->userdata['logged_in'])) {
                   redirect('');
              
                } 

                $data['email'] = ($this->session->userdata['logged_in']['email']);
                $data['nama']   = ($this->session->userdata['logged_in']['nama']);
   		$this->load->view('timeline_view',$data);
   }

 
}
