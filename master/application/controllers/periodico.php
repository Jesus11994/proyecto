<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class periodico extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
		public function indexa()
	{
		$this->load->view('indexa');
	}
		public function indexu()
	{
		$this->load->view('indexu');
	}
	public function contacto()
	{
		$this->load->view('contacto');
	}
	public function sobre()
	{
		$this->load->view('sobre');
	}
		public function noticianu()
	{
		$this->load->view('noticianu');
	}
			public function noticiapa()
	{
		$this->load->view('noticiapa');
	}


	//controladores de la seccion 
	public function aviso()
	{
		$this->load->view('aviso');
	}
	public function cultural()
	{
		$this->load->view('cultural');
	}
	public function deportes()
	{
		$this->load->view('deportes');
	}
	public function policiaco()
	{
		$this->load->view('policiaco');
	}
	public function social()
	{
		$this->load->view('social');
	}
		public function login()
	{
		$this->load->view('login');
	}
	//controla el envio
		public function enviar()
	{
		$this->load->view('enviar');
	}
}