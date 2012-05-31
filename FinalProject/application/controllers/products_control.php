<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_control extends CI_Controller {
    
/**
 *index for products controller loads all products page 
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
 *this does the same thing as index, loads all products 
 */
        
        public function all()
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
 *this page loads only the rings 
 */
        
	public function rings()
	{
            $this->load->model('products_model');
            
            $products = $this->products_model->get_rings();

            $view = array();
            
            $view['data'] = $products; 
            
            $this->load->view('_header');
            $this->load->view('view_products', $view);
            $this->load->view('_footer');
	}
        
//-----------------------------------------------------------------------------
        
/**
 *Page with only Necklaces 
 */
        
	public function necklaces()
	{
            $this->load->model('products_model');
            
            $products = $this->products_model->get_necklaces();

            $view = array();
            
            $view['data'] = $products; 
            
            $this->load->view('_header');
            $this->load->view('view_products', $view);
            $this->load->view('_footer');
	}
        
//-----------------------------------------------------------------------------
        
/**
 *page with only earrings 
 */
        
	public function earrings()
	{
            $this->load->model('products_model');
            
            $products = $this->products_model->get_earrings();

            $view = array();
            
            $view['data'] = $products; 
            
            $this->load->view('_header');
            $this->load->view('view_products', $view);
            $this->load->view('_footer');
	}
        
}
