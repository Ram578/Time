<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {	
	/**
	 * This is Home page controller.
	 * Develope on 19th July'2016 by Hemanth Kumar
	 * Modified on 24th.
	 */ 

	public function index()
	{
		/**
		* Checking the session and redirecting to respective pages
		*/
		if(isset($this->session->userdata['UserID']))
		{
			redirect('/welcome', 'refresh');
		}else
		{
			$arrData['Title'] = 'AIMs - Time Discrimination Registration Form';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);

			$this->load->view('home', $arrData);
		}
	}

	public function logout()
	{
		//$this->session->session_destroy();

		$this->session->unset_userdata('UserID');
		
		redirect('/', 'refresh');
	}

	public function register()
	{
		/* Load the database model:
      	/application/models/Register.php */

    	$this->load->model('registermodel');

    	$result = $this->registermodel->RegisterUser();
		
		// var_dump($_POST);
    	
		if(is_integer($result))
    	{
    		 redirect('/welcome', 'refresh');
    	}else
    	{
    		$this->session->set_flashdata('Errors', array($result)); 

    		redirect('/', 'refresh');
    	}

	}
	
	//
	public function check_register() 
	{
		$this->load->model('registermodel');
		
		$result = $this->registermodel->check_register_user();
				
		if($result['status'])
    	{
    		redirect('/welcome', 'refresh');
    	}
		else
    	{
    		$arrData['Title'] = 'AIMs - Time Discrimination Registration Form';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;
			
			$arrData['file_number'] = $result['file_num'];

			$arrData['Footer'] = $this->load->view('footer', $arrData, true);

			$this->load->view('data_register', $arrData);
    	} 
	}
	
	public function date_test() 
	{
		$this->load->model('registermodel');
		
		$result = $this->registermodel->test_date();
		echo timezones('UM5');
		echo "\n";
		var_dump($result);
		die;
	}
}
