<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function processRequest()
	{
		
		
		$this->load->model('contact_model');
		
		if ($this->contact_model->sendEmail())
		{
			die(json_encode(array("success"=>true)));
		}
		else
		{
			die(json_encode(array("success"=>false)));
		}
	}
}
