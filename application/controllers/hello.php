<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// Must be CI_Controller.
//Simple DB page.
class Hello extends CI_Controller
{
   function index()
   {

     	$this->load->model('data_model');
		$data['row'] = $this->data_model->getAll();

		$this->load->view('showdbsimpleinformation', $data);
   }
}
 