<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscores extends CI_Controller {

	/**
	 * This is Subscores page controller.
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			$this->load->model('adminmodel');

			$arrData['sub_scores'] = $this->adminmodel->fetch_subscores();
			
			$arrData['subscore_status'] = $this->adminmodel->fetch_subscores_status();
			
			$this->load->view('sub_scores', $arrData);
		}
		else
		{
			redirect('/admin', 'refresh');
		}
	}
	
	function edit_subscores()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->update_subscores();

		echo json_encode($result);
		
	}
	
	// Update the subscores status active or inactive for application functionality
	function inactive_subscores()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->update_subscores_status();

		if($result)
		{
			redirect('/subscores', 'refresh');
		}
	}
	function delete_row()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->delete_subscore_row();

		if($result)
		{
			echo "success";
		}
		else
		{
			echo "fail";
		}
	}
	function subscore_subcheck() {
		
		$this->load->model('adminmodel');

		$result = $this->adminmodel->checkbox();

		if($result)
		{
			echo "success";
		}
		else
		{
			echo "fail";
		}
	}
}
