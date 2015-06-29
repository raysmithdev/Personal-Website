<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    public function sendEmail() 
    {
	    
	    $email = $this->input->post('email');
		$msg = $this->input->post('message');
		
		$this->load->library('email');

		$this->email->from($email);
		$this->email->to('raysmithdev@gmail.com'); 
		
		$this->email->subject('Website Contact Form');
		$this->email->message($msg);	
		
		return $this->email->send();      
    }
}