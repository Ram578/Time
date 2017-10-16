<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newexample extends CI_Controller {

	/**
	 * This is Newexample page controller.
	 */
	public function index()
	{
		if(!isset($this->session->userdata['UserID']))
		{
			redirect('/', 'refresh');
		}else
		{
			$this->load->model('frontendmodel');
			
			$arrData['Title'] = 'AIMS - Test';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);
			
			$questions_result = $this->frontendmodel->fetch_practice_questions();
			
			if(isset($questions_result['practice'])) 
			{
				//Get the from the 3rd practice question for displaying the questions in more examples
				$practice_order = $questions_result['practice'];
				$practice_order_count = count($practice_order);
				$practice = array();
				$examples = array();
				
				for($i=2; $i<$practice_order_count; $i++) 
				{
					array_push($practice, $practice_order[$i]);
				}
				
				$arrData['Questions'] = $practice;
			} 
			
			/*
			if(isset($questions_result['order'])) {
				
				//To display the sorted order in display order page for practice questions
				$practice_order = $questions_result['order']['practice'];
				$practice_order_count = count($practice_order);
				$practice = array();
				
				for($i=0; $i<$practice_order_count; $i++) 
				{
					$id = $practice_order[$i];
					
					foreach($questions_result['practice'] as $row)
					{
						if($row['id'] == $id && $i >= 2) 
						{
							array_push($practice, $row);
						}
					}
				}
				
				//Replace the sorted data for displaying in page				
				// $questions_result['practice'] = $practice;		
				$arrData['Questions'] = $practice;
			} else 
			{
				$arrData['Questions'] = $questions_result['practice'];
			}
			*/

			$this->load->view('new_example', $arrData);
		}
	}
}
