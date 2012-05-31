<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_control extends CI_Controller {

/**
 *If the user is logged in take them to their user page - if not take them to 
 * the login page 
 */    

	public function index()
	{
            if ($this->session->userdata('is_logged_in') === TRUE)
            {
                $this->load->view('view_user');
            }
            else
            {
                redirect('users_control/login');
            }
	}
        

        
}
