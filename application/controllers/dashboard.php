<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * This is Dashboard page controller.
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
