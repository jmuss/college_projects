<?php

class Products_model extends CI_Model {
    
    public function __construct(){
        
        parent::__construct();
        $this->load->database();
    }
    
//-----------------------------------------------------------------------------
    
/**
 *Gets all product info out of db and sends it to controller
 * 
 * @return array 
 */
    
    public function get_prd_info(){
        $query = $this->db->query('SELECT prd_id, prd_name, prd_description, 
            prd_picture, prd_price FROM products;');
        $prd_info = $query->result();
        
        return $prd_info;
    }
    
//-----------------------------------------------------------------------------
    
/**
 *pulls product name and picture out of db to be displayed on main page
 * 
 * @return array
 */
    
    public function product_pics(){
        $query = $this->db->query('SELECT prd_name, prd_picture, prd_price FROM products;');
        $prd_info = $query->result();
        
        return $prd_info;
    }
    
//-----------------------------------------------------------------------------

/**
 *gets only products with type = 'ring' for rings page
 * 
 * @return array
 */
    
    public function get_rings(){
        $query = $this->db->query('SELECT prd_id, prd_name, prd_description, 
            prd_picture, prd_price FROM products WHERE prd_type = "ring";');
        $prd_info = $query->result();
        
        return $prd_info;
    }

//-----------------------------------------------------------------------------
    
/**
 *gets only products with type = 'neck' for necklace page
 * 
 * @return array
 */
    
    public function get_necklaces(){
        $query = $this->db->query('SELECT prd_id, prd_name, prd_description, 
            prd_picture, prd_price FROM products WHERE prd_type = "neck";');
        $prd_info = $query->result();
        
        return $prd_info;
    }
    
//-----------------------------------------------------------------------------
    
/**
 *gets only products with type = 'ear' for earrings page
 * 
 * @return array
 */

    public function get_earrings(){
        $query = $this->db->query('SELECT prd_id, prd_name, prd_description, 
            prd_picture, prd_price FROM products WHERE prd_type = "ear";');
        $prd_info = $query->result();
        
        return $prd_info;
    
    
    }

}

?>