<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {
        $this->load->view('admin/login');
    }
	
	public function home() {
         $this->load->view('admin/home');
        }
	
	public function student() {
         
        }
	
	public function faculty() {
         $data['approve_faculty'] = $this->Admins->view_all('faculty_register');
         $this->load->view('admin/faculty/faculty',$data);
        }
		
	public function approve_faculty($id) {
        $data = array("status" => 'Approved');
        $result = $this->Admins->update('faculty_register', $data, 'id', $id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Faculty Successfully Approved');
            redirect('Admin/faculty/faculty');
        } else {
            $this->session->set_flashdata('error_msg', 'Some Error Occureed.');
            redirect('Admin/faculty/faculty');
        }
    }
	
	
	public function del_approve_faculty($id) {
        $data = array("isactive" => 3);
        $result = $this->Admins->update('faculty_register', $data, 'id', $id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Deleted Successfully');
            redirect('Admin/faculty/faculty');
        } else {
            $this->session->set_flashdata('error_msg', 'Some Error Occureed.');
            redirect('Admin/faculty/faculty');
        }
    }
		
	public function internal_assessment() {
         
        }
	
	public function feedback() {
         
        }
	
	public function news_update() {
         $data['news_update'] = $this->Admins->view_all('news_update');
         $this->load->view('admin/news_update/news_update',$data);
        }
		
	public function add_news_update() {
        if ($this->input->post('submit')) {
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data = array("title" => $this->input->post('title'), "description" => $this->input->post('description'),"isactive"=>1);
            $result = $this->Admins->insert('news_update', $data);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'News Update Inserted successfully. ');
                redirect('Admin/news_update');
            } else {
                $this->session->set_flashdata('error_msg', 'Some error occured.Try Again ');
                redirect('Admin/news_update');
            }
        }
        $this->load->view('admin/news_update/news_update_add');
    }
	
	public function edit_news_update($id) {
         $data['news_update'] = $this->Admins->edit('news_update', 'id', $id);
   
         if ($this->input->post('update')) {
			  $data = array("title" => $this->input->post('title'), "description" => $this->input->post('description'),"isactive"=>1);
              $a = $this->Admins->update('news_update', $data, 'id', $id);
            if ($a == true) {
                $this->session->set_flashdata('success_msg', 'News Update Details Updated successfully. ');
                redirect('Admin/news_update');
            } else {
                $this->session->set_flashdata('error_msg', 'Some error occured.Try Again ');
                 redirect('Admin/news_update');
            }
         }
        $this->load->view('admin/news_update/news_update_edit',$data);
    }
	
	public function del_news_update($id) {
        $data = array("isactive" => 3);
        $result = $this->Admins->update('news_update', $data, 'id', $id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Deleted Successfully');
            redirect('Admin/news_update');
        } else {
            $this->session->set_flashdata('error_msg', 'Some Error Occureed.');
            redirect('Admin/news_update');
        }
    }
		
	public function contact_us() {
         $data['report'] = $this->Admins->view_all('admission');
         $this->load->view('admin/contact_us/contact_us',$data);
        }
	
	public function about_us() {
         $data['about_us'] = $this->Admins->view_all('about_us');
         $this->load->view('admin/about_us/about_us',$data);
        }
		
	public function edit_about_us($id) {
         $data['about_us'] = $this->Admins->edit('about_us', 'id', $id);
   
         if ($this->input->post('update')) {
			  $data = array("title" => $this->input->post('title'), "description" => $this->input->post('description'),"isactive"=>1);
              $a = $this->Admins->update('about_us', $data, 'id', $id);
            if ($a == true) {
                $this->session->set_flashdata('success_msg', 'About Us Details Updated successfully. ');
                redirect('Admin/about_us');
            } else {
                $this->session->set_flashdata('error_msg', 'Some error occured.Try Again ');
                 redirect('Admin/about_us');
            }
         }
        $this->load->view('admin/about_us/about_us_edit',$data);
    }
   

}

?>
