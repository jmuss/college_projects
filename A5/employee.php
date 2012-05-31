<?php

class Employee {
    
    //Class Properties 
    private $fname;
    private $lname;
    private $phone;
    private $office;
    
    //class functions 
//-----------------------------------------------------------------------------
/**
 * Construstor function for setting object params from within the app
 * 
 * @param string $fname
 * @param string $lname
 * @param string $phone
 * @param string $office 
 */
    
    public function __constructor($fname, $lname, $phone, $office) {
        $this->set_fname($fname);
        $this->set_lname($lname);
        $this->set_phone($phone);
        $this->set_office($office);
}
    
//-----------------------------------------------------------------------------
/**
 *sets first name
 * 
 * @param string $fname 
 */

    private function set_fname($fname) {
        $this->fname = $fname;
    }
//-----------------------------------------------------------------------------
/**
*sets last name
* 
* @param string $lname 
*/
    
    private function set_lname($lname) {
        $this->lname = $lname;
    }
//-----------------------------------------------------------------------------
/**
 *sets phone number
 * 
 * @param string $phone 
 */
    
    private function set_phone($phone) {
        $this->phone = $phone;
    }
//-----------------------------------------------------------------------------
/**
 *sets office number
 * 
 * @param string $office 
 */
    
    private function set_office($office) {
        $this->office = $office;
    }
//-----------------------------------------------------------------------------
/**
 *Returns first name
 * 
 * @return string
 */
    
    public function get_fname() {
        return $this->fname;
    }
//-----------------------------------------------------------------------------
/**
 *Returns last name
 * 
 * @return string
 */
    
    public function get_lname() {
        return $this->lname;
    }
//-----------------------------------------------------------------------------
/**
 *Returns phone number
 * 
 * @return string
 */
    
    public function get_phone() {
        return $this->phone;
    }
//-----------------------------------------------------------------------------
/**
 *Returns office number
 * 
 * @return string
 */
    public function get_office() {
        return $this->office;
    }
//-----------------------------------------------------------------------------
    
}

?>
