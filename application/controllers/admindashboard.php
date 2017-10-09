<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends CI_Controller {

	/**
	 * This is Admindashboard page controller.
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			//$this->load->view('admindashboard');
			redirect('/userslist', 'refresh');
		}else
		{
			redirect('/admin', 'refresh');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('EmployeeID');

		$this->session->unset_userdata('EmployeeFName');

		$this->session->unset_userdata('EmployeeLName');
		
		$this->session->unset_userdata('EmployeeRole');

		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
    	$this->output->set_header("Pragma: no-cache");

		redirect('/admin', 'refresh');
	}
}
