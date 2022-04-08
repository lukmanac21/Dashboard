<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		if ($this->auth->logged_in()) {
            redirect('dashboard');
        }else{
        	$this->load->view('home');
        }
	}
}
