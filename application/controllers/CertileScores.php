<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certilescores extends CI_Controller {

	/**
	 * This is Certilescores page controller.
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			$this->load->model('adminmodel');

			$arrData['certile_scores'] = $this->adminmodel->fetch_certile_scores();

			$this->load->view('certile_scores', $arrData);
			
		}
		else
		{
			redirect('/admin', 'refresh');
		}

	}
	
	// Add or Edit a row in certile scores table
	function add_or_edit_certile_scores()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->edit_or_add_certilescores();

		echo json_encode($result);
		
	}
	
	// Delete a row in certile scores table
	function delete_row()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->delete_certile_score_row();

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
