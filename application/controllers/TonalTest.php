<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tonaltest extends CI_Controller {
	
	/**
	 * This is Tonaltest page controller.
	 */
	public function index()
	{
		if(isset($this->session->userdata['UserID']))
		{
			$this->load->model('frontendmodel');
			
			$this->load->model('adminmodel');

			$arrData['Title'] = 'AIMS - Test';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);
				
			$arrData['subscores'] = $this->frontendmodel->fetch_subscores();
			
			$arrData['subscore_status'] = $this->adminmodel->fetch_subscores_status();
			
			$questions_result = $this->frontendmodel->FetchQuestions();
			
			if(isset($questions_result['order'])) 
			{
				
				//To display the sorted order in display order page for test questions
				$test_order = $questions_result['order']['test'];
				$test_order_count = count($test_order);
				$test = array();
				
				for($i=0; $i<$test_order_count; $i++) 
				{
					$id = $test_order[$i];
					
					foreach($questions_result['test'] as $row)
					{
						if($row['id'] == $id) 
						{
							array_push($test, $row);
						}
					}
				}
				
				//Replace the sorted data for displaying in page				
				// $questions_result['test'] = $test;		
				$arrData['Questions'] = $test;
			} 
			else
			{
				$arrData['Questions'] = $questions_result['test'];
			}
			$this->load->view('tonal_test', $arrData);
		}
		else
		{
			redirect('/', 'refresh');
		}
	}

	function saveuseranswer()
	{
		$this->load->model('frontendmodel');

		$this->frontendmodel->SaveUserAnswer();
	}
	
	function save_test_completed_date()
	{
		$this->load->model('frontendmodel');

		$this->frontendmodel->update_test_completed_date();
	}
	
	//get the user for check the subscore
	function get_user_score() 
	{
		$this->load->model('frontendmodel');

		$arrResult = $this->frontendmodel->FetchResult();

		$intCounter = 0;

		foreach ($arrResult as $key => $value) 
		{
			if($value['result'] && $value['includeinscoring'])
			{
				$intCounter = $intCounter + 1;
			}
		}
		
		echo $intCounter;
	}
}
