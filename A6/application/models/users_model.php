<?php

class Users_model extends CI_Model {
    
    public function __construct(){
        
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all(){
        $query = $this->db->query('SELECT emp_lname, emp_fname, emp_phone, emp_office FROM employee');
    }
    
    
}

?>
