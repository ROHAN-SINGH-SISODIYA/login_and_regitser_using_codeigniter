<?php

 /**
  * 
  */
 class user extends CI_controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		if (empty($this->session->userdata('username')))
 		{
 			$this->session->set_flashdata("error","Please Login First to view this page");
 			redirect("auth/login");
 		}
 	}

 	public function profile()
 	{
         $this->load->view('profile');
 	}
 }
?>