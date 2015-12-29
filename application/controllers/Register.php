<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('register/register');

	}

	public function addUser($register)
	{
		
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('password_confirmation', 'password_confirmation', 'required|matches[password]');

 

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register/register');
		} else {
			echo "sukses";
		}
		

		$firstname = $this->input->post('first_name');
		$lastname = $this->input->post('last_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$repassword = $this->input->post('password_confirmation');

		$insert_data = array(
						'firstName' => $firstname,
						'lastName' => $lastname,
						'email' => $email,
						'password' => $password,
						'repassword' => $repassword
						);
		

		
	}
}