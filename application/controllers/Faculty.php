<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faculty extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {
		
		 $this->load->view('faculty/header');
		 $this->load->view('faculty/index');
         $this->load->view('faculty/footer');
    }
	
	public function my_account() {
         $this->load->view('faculty/header');
		 $this->load->view('faculty/my_account');
         $this->load->view('faculty/footer');
        }
		
		
	public function leave() {
         $this->load->view('faculty/header');
		 $this->load->view('faculty/leave');
         $this->load->view('faculty/footer');
        }
	
	
	public function attendence() {
         $this->load->view('faculty/header');
		 $this->load->view('faculty/attendence');
         $this->load->view('faculty/footer');
        }
		
		
	public function internal_assessment() {
         $this->load->view('faculty/header');
		 $this->load->view('faculty/internal_assessment');
         $this->load->view('faculty/footer');
        }
	
   

}

?>
