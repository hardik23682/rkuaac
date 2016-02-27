<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->library('encryption');
    }

	
    public function validatelogin(){
        // grab user input
        $email = $this->security->xss_clean($this->input->post('txtemail'));
        $password = $this->security->xss_clean($this->input->post('txtpass'));

        // Prep the query
        $this->db->where('email_id', $email);
        $this->db->where('password', md5($password));

        
        // Run the query
        $query = $this->db->get('faculty_master');
		
        // Let's check if there are any results
        if($query->num_rows() > 0)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
				'userid' => $row->faculty_id,
				'username' => $row->faculty_name,
				'schoolid' => $row->school_id,
				'is_approved' => $row->is_approved,
				'validated' => true
			);
            return $data;
        }
        // If the previous process did not validate
        // then return false.
        return array('validated' => false);
    }
    public function faculty_add($data)
    {
        $this->db->insert('faculty_master', $data);
        return $this->db->insert_id();
    }
    public function faculty_exists($email)
    {
        $this->db->select('email_id');
        $this->db->from('faculty_master');
        $this->db->where('email_id', $email);
        $count= $this->db->count_all_results();
        return $count;
    }


}
?>