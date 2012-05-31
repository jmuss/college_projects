<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $this->load->view('welcome_message');
	}
        
        public function list()
        {
            $this->load->model('users_model');
            $people = $this->users_model->get_all();
            $view = array();
            $view['data'] = $people;
            $this->load->view('directory', $view);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
