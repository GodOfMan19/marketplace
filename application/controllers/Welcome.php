<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('front/header');
		$this->load->view('front/konten/home');
		$this->load->view('front/footer');
	}
	public function login() 
	{
		$this->load->view('front/header');
		$this->load->view('front/konten/login');
		$this->load->view('front/footer');
	}
	public function daftar()
	{
		$this->load->view('front/header');
		$this->load->view('daftar');
		$this->load->view('front/footer');
	}
	public function alert_login()
	{	
		$this->load->view('alert_login');
	}
	public function header()
	{
		$this->load->view('header');
		$this->load->view('header_pulsa');
	}
}
