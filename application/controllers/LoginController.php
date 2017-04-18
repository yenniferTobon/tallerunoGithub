<?php

class LoginController extends CI_controller{
	public function index(){
		$this->load->view('login');
	}

	public function checklogin(){

		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_verifyUser');

		if($this->form_validation->run() ==false){
			$this->load->view('login');

		}else{
			redirect('HomeController/index');
		}
	}

	public function verifyUser(){
		$name= $this->input->post('username');
		$pass= $this->input->post('password');

		$this->load->model('LoginModel');

		if($this->LoginModel->login($name,$pass)){
			return true;

		}else{
			$this->form_validation->set_message('verifyUser', 'incorrecto usuario o contraseña');

	    }
	}
}
?>