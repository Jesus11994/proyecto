<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logincontrolador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('username')){
			redirect('periodico/index');
		}

		if (isset($_POST['password'])) {	
			$this->load->model('user_modelo');
			if ($this->user_modelo->login($_POST['username'],$_POST['password'])){
				$this->session->set_userdata('username',$_POST['username']);
				redirect('Welcome');
			}else{
				redirect('logincontrolador');
			}
		}
		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('periodico/index');
	}

}
