<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller {

	/**
	 * This is Thankyou page controller.
	 */
	public function index()
	{
			$arrData['Title'] = 'AIMS - Test';

			$Header = $this->load->view('header', $arrData,true);

			$arrData['Header'] = $Header;

			$arrData['Footer'] = $this->load->view('footer', $arrData,true);

			if(isset($this->session->userdata['UserID']))
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

				$arrData['NoOfQtsAttempted'] = sizeof($arrResult);

				$arrData['CorrectAns'] = $intCounter;

				$percentage = (($intCounter*100)/sizeof($arrResult));

				if($percentage < 30)
					$strGrade = "<span style='color:#ff0000;'>Weak</span>";
				elseif($percentage >= 30 && $percentage < 70)
					$strGrade = "<span style='color:#00ff00;'>Average</span>";
				elseif($percentage >= 70)
					$strGrade = "<span style='color:#00ff00;'>Strong</span>";

				$arrData['Grade'] = $strGrade;

				$this->load->view('thankyou', $arrData); 
			}
			else
			{
				redirect('/', 'refresh');
			}
	}

	function logout()
	{
		$this->session->unset_userdata('UserID');

		echo json_encode(array('Status' => true));
	}
}
