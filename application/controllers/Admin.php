<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * This is TonalTest page controller.
	 * Develope on 21th July'2016 by Hemanth Kumar
	 */
	public function index()
	{
		if(!isset($this->session->userdata['EmployeeID']))
		{
			$this->load->view('admin');
		}else
		{
			redirect('admindashboard', 'refresh');
		}
	}

	public function login()
	{
		$this->load->model('adminmodel');
		
		$result = $this->adminmodel->Login();

		if($result)
		{
			redirect('/admindashboard', 'refresh');
		}else
		{
			redirect('/admin', 'refresh');
		}
	}
}
