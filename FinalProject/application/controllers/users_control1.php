<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_control extends CI_Controller {
    
/**
 *users controller index method views all products 
 */

	public function index()
	{
            $this->load->model('products_model');
            
            $products = $this->products_model->get_prd_info();

            $view = array();
            
            $view['data'] = $products;            
            
            $this->load->view('_header');
            $this->load->view('view_products', $view);
            $this->load->view('_footer');
	}
        
//-----------------------------------------------------------------------------
        
/**
 *the register method takes in form data, validates it, then sends it to 
 * users_model to be put in the db
 * 
 * @return return 
 */
        
        public function register()
        {
            $this->load->library('form_validation');
            $this->load->helper('form');
            
            if (count($_POST) >0)
            {
                $this->form_validation->set_rules('user', 'Username', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('pass', 'Your Password', 'trim|required|max_length[50]|min_length[8]');
                $this->form_validation->set_rules('email', 'Your Email', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('first', 'First name', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('last', 'Last name', 'trim|required|max_length[75]');
                $this->form_validation->set_rules('phone', 'phone number', 'trim|max_length[10]|numeric');
                $this->form_validation->set_rules('street', 'address', 'trim|max_length[75]');
                $this->form_validation->set_rules('zip', 'zip code', 'trim|max_length[5]|numeric');
                $this->form_validation->set_rules('State', 'state name', 'trim|max_length[2]|alpha');
            
                if($this->form_validation->run() === TRUE)
                {
                    $this->load->model('users_model');
                    $this->users_model->add_new_user($_POST['user'], 
                        $_POST['pass'], $_POST['email'], $_POST['first'], 
                        $_POST['last'], $_POST['phone'], $_POST['street'], 
                        $_POST['zip'], $_POST['state']);
                    
                    $this->load->view('_header');
                    $this->load->view('success');
                    $this->load->view('_footer');
                    
                    return;
                }
            }
            
            $this->load->view('_header');
            $this->load->view('signup');
            $this->load->view('_footer');
        }
        
//-----------------------------------------------------------------------------
        
/**
 *the login method in the users controller is to handle when someone logs in 
 * from the user pages 
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