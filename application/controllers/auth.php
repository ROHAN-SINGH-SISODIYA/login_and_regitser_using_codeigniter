<?php

 /**
  * 
  */
 class auth extends CI_controller
 {
 	
    public	function login()
 	{
 		$this->form_validation->set_rules('username','Username','required');
 		$this->form_validation->set_rules('password','Password','required|min_length[5]');

 		if($this->form_validation->run()==True)
          {
              $username=$_POST['username'];
              $password=md5($_POST['password']);

              $this->db->select('*');
              $this->db->from('users');
              $this->db->where(array('email'=>$username,'password'=>$password));

              $query=$this->db->get();
              $user=$query->row();
              

              if($user->username)
              { 
              	
                
                 $this->session->set_flashdata('success','you are logged in');
                 //echo $this->session->flashdata('success');
                //var_dump($this->session->all_userdata()); exit();
               
                $this->session->set_userdata('user_logged',TRUE);
                $this->session->set_userdata('username',$user->username);

                redirect("user/profile","refresh");
              }
              else
              {
                $this->session->set_flashdata('error','No such account in database'); 
                redirect("auth/login");             
              }
          }	
 		$this->load->view('login');
 	}


    public	function register()
 	{
        if (isset($_POST['register'])) 
        {
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          $this->form_validation->set_rules('password','confirm password','required|min_length[5]|matches[password]');
          $this->form_validation->set_rules('phone','Phone','required');
          if ($this->form_validation->run()==True)
          {
              echo "form validated";
              $data=array(
               'username'=>$_POST['username'],
               'email'=>$_POST['email'],
               'password'=>md5($_POST['password']),
              
               'created_date'=>date('y-m-d'),
               'phone'=>$_POST['phone'],
               'gender'=>$_POST['gender']
              );

              $this->db->insert('users',$data);

              $this->session->set_flashdata('success','Your account has been registerd.you can login now');
              redirect("auth/register","refresh");
          }
        }
 		$this->load->view('register');
 	}
 }
?>