<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!isset($this->session->userdata['UserID']))
		{
			redirect('/', 'refresh');
		}else
		{
			$arrData['Title'] = 'AIMs - Time Discrimination Registration Form';

			$Header = $this->load->view('header', $arrData,true);
			
			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);

			$this->load->view('welcome_message', $arrData);
		}
	}
	
	
	public function save_user_status() {
		
		$this->load->model('frontendmodel');

		$this->frontendmodel->save_user_status();
	}
}
