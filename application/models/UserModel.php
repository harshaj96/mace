<?php
class UserModel extends CI_Model {

 function __construct(){
  parent::__construct();
 }

 function processLogin($userName=NULL,$password){
  $this->db->select("*");
  $whereCondition = $array = array('username' =>$userName,'password'=>$password);
  $this->db->where($whereCondition);
  $this->db->from('login');
  $query = $this->db->get();
  return $query;
 }

}
?>