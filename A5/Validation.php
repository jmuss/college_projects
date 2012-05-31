<?php



//-----------------------------------------------------------------------------
/**
 *checks that user has entered something
 * 
 * @param string $field
 * @return boolean 
 */

    function check_required($field){
      
        if(strlen(trim($_POST[$field])) < 1)
            return "$field is required";
        else 
            return TRUE;
    }
    
    
    
    
//-----------------------------------------------------------------------------
/**
 *checks that the user name field is between 3 and 100 characters
 * 
 * @param string $field
 * @param int $max_length
 * @param int $min_length
 * @return boolean 
 */   
    
    function n_check($field, $max_length = 100, $min_length = 3){
        if (strlen(trim($_POST[$field])) > $max_length)
            return "Your $field should be less than 100 characters";
        else if (strlen(trim($_POST[$field])) < $min_length)
            return "Your $field should be greater than 3 characters";
        else 
            return TRUE;
    }
    
   
//-----------------------------------------------------------------------------
/**
 *checks that the users phone number does not contain invalid characters
 * 
 * @param string $field
 * @return boolean|string 
 */
    
    
    function p_check ($field){
        $f = $_POST[$field];
        $phone_chars = array ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '(', ')', '-', '.', ' ');
        
        for ($i=0; $i < strlen($f); $i++){ 
            if (in_array($f{$i}, $phone_chars))
                return TRUE;
            else 
                return "You entered invalid characters in your phone number";
            
        }
        
    }
//-----------------------------------------------------------------------------
/**
 *checks that users phone number is a valid length
 * 
 * @param string $field
 * @return boolean 
 */  
    
    function p_length ($field) {
        if (strlen(trim($_POST[$field])) > 15)
            return "$field is too long";
        else
            return TRUE;
    }

//-----------------------------------------------------------------------------
/**
 *checks to see if any errors have occured in the user input  
 */
    
    $errors = array();

    $success = FALSE;
   
   if (count($_POST) > 0) {
       
       $result = check_required('fname');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = check_required('lname');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = n_check('fname');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = n_check('lname');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = check_required('phone');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = p_check('phone');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = p_length('phone');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       $result = check_required('office');
       if ($result !== TRUE) {
           $errors[] = $result;
       }
       
       if (count($errors) < 1) {
           
           $success = TRUE;
           
        
 
        
          
        
           
       }
   }

?>
