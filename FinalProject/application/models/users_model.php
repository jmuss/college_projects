<?php

class Users_model extends CI_Model {
    
    public function __construct(){
        
        parent::__construct();
        $this->load->database();
    }
    
//-----------------------------------------------------------------------------
    
/**
 *pulls all of the users info out of the database for display on their page
 * 
 * @return array
 */
    
    public function get_usr_info(){
        $query = $this->db->query('SELECT usr_lname, usr_fname, usr_phone, usr_email, 
            usr_street, usr_zip, usr_state, FROM users;');
        $userinfo = $query->result();
        
        return $userinfo;
    }
    
//-----------------------------------------------------------------------------
    
/**
 *Creates a new user entry in the db 
 * @param string $user
 * @param password $pass
 * @param string $first
 * @param string $last
 * @param string $email
 * @param string $phone
 * @param string $street
 * @param INT $zip
 * @param string $state
 * @return array
 */
    
    public function add_new_user ($user, $pass, $first, $last, $email, $phone, $street, $zip, $state){
        
        $pass = md5($pass);
        
        $query = "INSERT INTO users (usr_fname, usr_lname, usr_email, usr_username,
            usr_passwd, usr_phone, usr_street, usr_zip, usr_state) VALUES ('$first', '$last',
            '$email', '$user', '$pass', '$phone', '$street', '$zip', '$state'); ";
        $result = $this->db->query($query);
        
        return $result;
    }
    
//-----------------------------------------------------------------------------
    
/**
 *checks user login data against username and password in db
 * @param string $user
 * @param password $pass
 * @return boolean 
 */
    
    public function check_credentials($user, $pass) {
        $query = $this->db->query("SELECT usr_username, usr_passwd FROM users WHERE usr_username = '$user';");
        
        if ($query->num_rows() > 0)
        {
            $db_record = $query->row();
            
            if (md5($pass) == $db_record->usr_passwd) {
                return TRUE;
            }
        }
        
        //doesn't match
        return FALSE;
    }
            
    
    
}

?>
