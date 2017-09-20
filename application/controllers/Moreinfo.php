<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moreinfo extends CI_Controller {	
	/**
	 * This is More info page controller.
	 */ 

	public function index()
	{
		/**
		* Checking the session and redirecting to respective pages
		*/
		if(isset($this->session->userdata['UserID']))
		{
			$arrData['Title'] = 'AIMs - Time Discrimination Registration Form';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);

			$this->load->view('moreinfo', $arrData);
			
		}else
		{
			redirect('/welcome', 'refresh');
		}
	}
}
