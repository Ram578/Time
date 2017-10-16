<?php
/**
* This class is used to handle the customer related info.
*/
class Registermodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('date');
	}
	
	function check_register_user()
	{
		$arrData = array();
		
		$file_num = $_POST['filenumber'];	
		
		$strQuery = 'SELECT * FROM `users` WHERE filenumber ="' . $file_num . '"';
		
		$objQuery = $this->db->query($strQuery);

		if($objQuery->num_rows()>0)
		{	
			$row = $objQuery->row_array();
			
			$this->session->set_userdata("UserName", $row['firstname']);
			$this->session->set_userdata("LastName", $row['lastname']);
			$this->session->set_userdata("Gender", $row['gender']);
			$this->session->set_userdata("UserID", $row['id']);
			
			$arrData['id']  = $row['id'];
			$arrData['status']  = true;
		}
		else
		{
			$arrData['file_num']  = $file_num ;
			$arrData['status']  = false;
		}
		
		return $arrData;
	}
	
	function RegisterUser()
	{
		if(sizeof($_POST) > 0)
		{
			$timestamp = time();
			$date_format = date("Y-m-d H:i:s", $timestamp);
			
			$arrUserData = array
			(
				'firstname'  	=> $_POST['firstname'],
				'lastname' 		=> $_POST['lastname'],
				'age'			=> $_POST['age'],
				'gender'		=> $_POST['gender'],
				'filenumber'	=> $_POST['filenumber'],
				'addeddate'		=> $date_format,
				'active'		=> 1
			);

			$result = $this->db->insert('users', $arrUserData);

			if($result)
			{
				$intUserID = $this->db->insert_id();

				$this->session->set_userdata("UserName", $_POST['firstname']);
				$this->session->set_userdata("LastName", $_POST['lastname']);
				$this->session->set_userdata("Gender", $_POST['gender']);
				$this->session->set_userdata("UserID", $intUserID);
				return $intUserID;
			}
			else
			{
				return array('OOPS...! We are not able to register you now. Please try again later.');
			}
		}
	}
	
}
?>