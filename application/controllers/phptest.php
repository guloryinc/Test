<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// Must be CI_Controller.
//Simple DB page.
class Phptest extends CI_Controller
{
   function index()
   {
		$this->load->view('function');
   }
}
