<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('index');
		$this->load->view('inc/footer');
	}
   
	public function about(){
		
		$this->load->view('about');
	}
}