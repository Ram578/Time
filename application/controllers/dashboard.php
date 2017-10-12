<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewExample extends CI_Controller {

	/**
	 * This is NewExample page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		if(!isset($this->session->userdata['UserID']))
		{
			redirect('/', 'refresh');
		}else
		{
			$this->load->view('new_example');
		}
	}
}
