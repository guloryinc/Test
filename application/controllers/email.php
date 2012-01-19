<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{

	// function index() 
	// {	
	// 	$this->load->library('email');  
	// 	$this->email->from('hello@gullory.com','Gulory');  
	// 	$this->email->to("hello@gulory.com");  
	// 	
	// 	// $path = $this->config->item('server_root');
	// 	// $file = $path . '/ci_day3/attachments/yourInfo.txt';
	// 	// 
	// 	// $this->email->attach($file);
	// 	$this->email->subject('A test email from CodeIgniter using Gmail');  
	// 	$this->email->message("I can now email from CodeIgniter using Gmail as my server!");  
	// 	$this->email->send();
	// }
	function index()
	{
		$this->load->view('newsletter');
	}
	
	function send() 
	{	
		$this->load->library('email');  
		$this->email->from('hello@gullory.com','Gulory');  
		$this->email->to("hello@gulory.com");  
		
		// $path = $this->config->item('server_root');
		// $file = $path . '/ci_day3/attachments/yourInfo.txt';
		// 
		// $this->email->attach($file);
		$this->email->subject('A test email from CodeIgniter using Gmail');  
		$this->email->message("I can now email from CodeIgniter using Gmail as my server!");  
		$this->email->send();
	}	
}


