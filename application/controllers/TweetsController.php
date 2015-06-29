<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TweetsController extends CI_Controller {

	public function getTweets()
	{
		
		$this->load->library('twitterfetcher');

        $tweets = $this->twitterfetcher->getTweets(array(
            'consumerKey'       => 'S75eHAjUGAtKmxJ6niT4u8QM3',
            'consumerSecret'    => 'saIVYSDnbcOPDkB1gdsxur1a0lZmGfWukff4yrC6RLudQ26Sf6',
            'accessToken'       => '87914350-DoQXulYfQe0AJSTcD2AgOXRNDmZrTgbIa70k6qVLc',
            'accessTokenSecret' => 'fjgIlZq7glBlcnQ8sG4rgsVRRzQRpIXG41cxVYrhWKxZm',
            'usecache'          => true,
            'count'             => 2,  //this how many tweets to fectch
            'numdays'           => 30
        ));
		
	
		$resp = file_get_contents($tweets);
		
		die(var_dump($resp));
		
		return $this->output->set_content_type('application/json')->set_output(json_encode($resp));
	}
}


