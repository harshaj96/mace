<?php

class Admins extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	
	function fetch_all_details()
    {

        $this->db->select('*');
        $this->db->from('about_us');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
		else
		{
			return array();
		}
    }
	
	

    function login($username, $password)
    {
        $this->db->select('id, username, password');
        $this->db->from('faculty_register');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function view_all($table)
    {
        $this->db->select('*');
        $this->db->where('isactive', 1);
        $this->db->from($table);
        $view = $this->db->get();
        return $view->result_array();
    }

public function view_all_job($table)
    {
        $this->db->select('*');
        $this->db->from('job_applications');
         $this->db->join('careers', 'careers.id = job_applications.job_id ');
         $this->db->where('careers.isactive', 1);
          $this->db->where('job_applications.isactive', 1);
        $view = $this->db->get();
        return $view->result_array();
    }
    public function view_all_facility()
    {
        $this->db->select('*');
        $this->db->from('facility');
        $this->db->join('facility_details', 'facility_details.facility_id = facility.id');
        $this->db->where('facility.isactive', 1);
        $this->db->where('facility_details.isactive', 1);
        $view = $this->db->get();
        //        echo $this->db->last_query();
        if ($view->num_rows() > 0) {
            return $view->result_array();
        }
    }
    public function view_all_activity()
    {
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->join('activity_details', 'activity_details.activity_id = activity.id');
        $this->db->where('activity.isactive', 1);
        $this->db->where('activity_details.isactive', 1);
        $view = $this->db->get();
        if ($view->num_rows() > 0) {
            return $view->result_array();
        }
    }


    function update($table, $data, $field, $id)
    {
        $this->db->where($field, $id);
        $error = $this->db->update($table, $data);
        return $error;
    }

    function edit($table, $field, $id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $id);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row_array();
        }
    }
    function fetch_all_actdetails($id)
    {

        $this->db->select('*');
        $this->db->from('activity');
        $this->db->join('activity_details', 'activity_details.activity_id = activity.id');
        $this->db->where('activity.id', $id);
        $this->db->where('activity.isactive', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }
    function fetch_all_facildetails($id)
    {

        $this->db->select('*');
        $this->db->from('facility');
        $this->db->join('facility_details', 'facility_details.facility_id = facility.id');
        $this->db->where('facility.id', $id);
        $this->db->where('facility.isactive', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }
    function all_facildetails()
    {
        $this->db->select('*');
        $this->db->from('facility');
        $this->db->join('facility_details', 'facility_details.facility_id = facility.id');
        $this->db->where('facility.isactive', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }
    function all_activitydetails()
    {
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->join('activity_details', 'activity_details.activity_id = activity.id');
        $this->db->where('activity.isactive', 1);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }
    public function insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function view_last($table, $id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('isactive', 1);
        $this->db->order_by($id, 'desc');
        $this->db->limit(1);
        $view = $this->db->get();

        if ($view->num_rows() > 0) {
            return $view->row_array();
        }
    }

}

?>