<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_control extends CI_Controller {

/**
 *index function loads main page of website  
 */
    
	public function index()
	{
            $this->load->model('products_model');
            
            $products = $this->products_model->product_pics();

            $view = array();
            
            $view['data'] = $products; 
            
            $this->load->view('_header');
            $this->load->view('view_main', $view);
            $this->load->view('_footer');
	}
        
//-----------------------------------------------------------------------------
        
/**
 *Login method checks username and password against what is stored in the db 
 * if correct set is_logged_in to TRUE, else error 
 */
        public function login()
        {
            $this->load->helper('form');
            $viewdata = array('message' => FALSE);
            
            if (count($_POST) > 0)
            {
                $this->form_validation->set_rules('user', 'Username', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('pass', 'Your Password', 'trim|required|max_length[50]|min_length[8]');
                
                if ($this->form_validation->run() === TRUE)
                {
                    $this->load->model('users_model');
                    $match = $this->users_model->check_credentials($_POST['user'], $_POST['pass']);
                    
                    if ($match === TRUE)
                    {
                        $this->session->set_userdata('is_logged_in', TRUE);
                        
                        redirect('login_control/index');
                    }
                    else
                    {
                        $viewdata['message'] = "Please try again!";
                    }
                }
            }
            $this->load->view('_header');
            $this->load->view('error_login', $viewdata);
            $this->load->view('_footer');
        }
        

        
}

