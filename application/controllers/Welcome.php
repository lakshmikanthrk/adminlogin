<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('User');
		$this->load->library('session');
		$this->load->library('email');

	}


	public function index()
	{
		$this->load->view('index');
	}

	public function home()
	{
		$this->load->view('home');
	}
	public function viewuser()
	{
		$userview = $this->User->fetch_user();
		$this->load->view('viewuser',compact('userview'));
	}

	public function userlogin()
	{
		$this->load->view('userlogin');
	}
	public function userhome()
	{
		$userdetail = $this->User->fetch_actualuser();
		$this->load->view('userhome',compact('userdetail'));
	}

	public function adminlogin()
	{
	   $email=$this->input->post('email');
	   $password=$this->input->post('password');
	   if($data = $this->User->userfetch($email,$password))
		{
			foreach ($data as $userdetails):
			$_SESSION['u_id']=$userdetails->u_id;
			$_SESSION['name']=$userdetails->name;
			$_SESSION['email']=$userdetails->email;
			$this->session->set_flashdata('feedback',"Successfully login!");
			$this->session->set_flashdata('feedback_class',"alert-success");
			redirect(base_url().'Welcome/home');
			endforeach;
		}
		else
		{
			unset($_SESSION['u_id']);
			unset($_SESSION['name']);
			unset($_SESSION['email']);
			$this->session->set_flashdata('feedback',"Your Mobile and Password is Invalid");
			$this->session->set_flashdata('feedback_class',"alert-danger");
			redirect(base_url().'Welcome/index');
		} 
	}


		public function adduser()
		{
		$name= $this->input->post('fname');
		$dob= $this->input->post('dob');
        $email= $this->input->post('email');
        $number= $this->input->post('number');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$gender=$this->input->post('gender');

		$adduser = array(
			'name'=>$name,
			'email'=>$email,
			'number'=>$number,
			'dob'=>$dob,
			'password'=>$password,
			'address'=>$address,
			'gender'=>$gender
		);
		$this->User->insert($adduser);
		redirect(base_url().'Welcome/viewuser');
		}


		/*user login*/
		public function login()
	{
	   $email=$this->input->post('email');
	   $password=$this->input->post('password');
	   if($data = $this->User->userfetch($email,$password))
		{
			foreach ($data as $userdetails):
			$_SESSION['u_id']=$userdetails->u_id;
			$_SESSION['name']=$userdetails->name;
			$_SESSION['email']=$userdetails->email;
			$this->session->set_flashdata('feedback',"Successfully login!");
			$this->session->set_flashdata('feedback_class',"alert-success");
			redirect(base_url().'Welcome/home');
			endforeach;
		}
		else
		{
			unset($_SESSION['u_id']);
			unset($_SESSION['name']);
			unset($_SESSION['email']);
			$this->session->set_flashdata('feedback',"Your Mobile and Password is Invalid");
			$this->session->set_flashdata('feedback_class',"alert-danger");
			redirect(base_url().'Welcome/userhome');
		} 
	}

}
