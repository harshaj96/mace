<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
    }

    public function index()
    {
		 $this->load->view('Home/header');
		 $this->load->view('Home/index');
         $this->load->view('Home/footer');
    }
	
	public function about()
    {
		 $data['about_us'] = $this->Admins->fetch_all_details();
		
		 $this->load->view('Home/header');
		 $this->load->view('Home/about',$data);
         $this->load->view('Home/footer');
    }
	
	public function contact()
    {
		 $this->load->view('Home/header');
		 $this->load->view('Home/contact');
         $this->load->view('Home/footer');
    }
	public function login()
    {
		 $this->load->view('Home/header');
		 $this->load->view('Home/login');
         $this->load->view('Home/footer');
    }
	
	public function register()
    {
		 $this->load->view('Home/header');
		 $this->load->view('Home/register');
         $this->load->view('Home/footer');
    }
	
	public function digital_text()
    {
		 $this->load->view('Home/header');
		 $this->load->view('Home/digital_text');
         $this->load->view('Home/footer');
    }
	
	public function faculty_login()
    {
		
		
		$result = $this->Admins->login($this->input->post('username'),$this->input->post('password'));
		
            
		if(!empty($result))
		{
		 $this->load->view('faculty/header');
		 $this->load->view('faculty/index');
         $this->load->view('faculty/footer');
		}
		else
		{
		 $this->load->view('Home/header');
		 $this->load->view('Home/login');
         $this->load->view('Home/footer');
		}
    }
	
	
	public function faculty_register()
    {
		
			$data = array("name" => $this->input->post('name'), "employee_id" => $this->input->post('employee_id'),"gender" => $this->input->post('gender'),"dob" => $this->input->post('dob'),"designation" => $this->input->post('designation'),"email" => $this->input->post('email'),"phone_number" => $this->input->post('contact_number'),"username" => $this->input->post('username'),"password" => $this->input->post('password'),"status" => 'Not Approved',"isactive"=>1);
            $result = $this->Admins->insert('faculty_register', $data);
            if ($result) {
                $this->load->view('Home/header');
				$this->load->view('Home/login');
				$this->load->view('Home/footer');
            } 
			else 
			{
                $this->load->view('Home/header');
			    $this->load->view('Home/login');
			    $this->load->view('Home/footer');
            }
		
    }
	
	
    

}
