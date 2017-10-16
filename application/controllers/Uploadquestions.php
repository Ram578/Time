<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadquestions extends CI_Controller {

	/**
	 * This is Uploadquestions page controller.
	 */
	public function index()
	{
		if(isset($this->session->userdata['EmployeeID']))
		{
			$this->load->model('adminmodel');

			$arrQuestions = $this->adminmodel->FetchQuestions();

			$arrData = array
			(
				'Questions' => $arrQuestions,
			);
			$this->load->view('upload_qtns', $arrData);
		}else
		{
			redirect('/admin', 'refresh');
		}
	}

	public function uploadquestion()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->upload_question();
		
		echo json_encode($result);
	}

	function delete_question()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->delete_question_row();

		if($result)
		{
			echo "success";
		}
		else
		{
			echo "fail";
		}
	}
	
	// Change the active status in aims_qusetions table
	function deletequestion()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->inactive_question();

		if($result)
		{
			redirect('/uploadquestions', 'refresh');
		}else
		{
			$this->session->set_flashdata('Errors', array('Unable to upload question. Please try again later.'));

			redirect('/uploadquestions', 'refresh');
		}
	}

	function includeinscore()
	{
		$this->load->model('adminmodel');

		$result = $this->adminmodel->UpdateIncludeInScore();

		if($result)
		{
			redirect('/uploadquestions', 'refresh');
		}else
		{
			$this->session->set_flashdata('Errors', array('Unable to update question. Please try again later.'));

			redirect('/uploadquestions', 'refresh');
		}
	}
	
	// Display the sorted questions in display order page
	function display_questions_order()
	{
		$this->load->model('adminmodel');
		
		$arrData['questions'] = $this->adminmodel->fetch_questions();
				
		if(isset($arrData['questions']['order'])) {
			
			$result = $arrData['questions'];
			
			//To display the sorted order in display order page for practice questions
		/*	$practice_order = $result['order']['practice'];
			$practice_order_count = count($practice_order);
			$practice = array();
			
			for($i=0; $i<$practice_order_count; $i++) 
			{
				$id = $practice_order[$i];
				
				foreach($result['practice'] as $row)
				{
					if($row['id'] == $id) 
					{
						array_push($practice, $row);
					}
				}
			}*/
			
			//To display the sorted order in display order page for test questions
			$test_order = $result['order']['test'];
			$test_order_count = count($test_order);
			$test = array();
			
			for($i=0; $i<$test_order_count; $i++) 
			{
				$id = $test_order[$i];
				
				foreach($result['test'] as $row)
				{
					if($row['id'] == $id) 
					{
						array_push($test, $row);
					}
				}
			}
			
			//Replace the sorted data for displaying in page
			//$arrData['questions']['practice'] = $practice;
			$arrData['questions']['test'] = $test;
			
			$this->load->view('display_questions_order',$arrData);
			
		} else {
			
			$this->load->view('display_questions_order', $arrData);
		}
	}
	
	// Save the sorted questions order in pitch_questions_order table in db
	function save_question_order() {
		
		$this->load->model('adminmodel');
		
		echo $this->adminmodel->save_questions_order();
		
	}
}
