<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

 class Error_404 extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Avoga Holidays || oops!!!! 404!"; 
		$this->load->helper('url');
		//$this->load->view('header', $data);
		$this->load->view('error_404', $data);
		//$this->load->view('footer', $data);
 	}
 } 
 ?>