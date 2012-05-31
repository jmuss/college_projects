<?php

require ('Validation.php');
require ('employee.php');



//-----------------------------------------------------------------------------
/**
 *Make Array of employee objects 
 */


    $robert = new Employee();
    $robert->__constructor("Robert", "Smith", "(850)241-4302", "Rm 221");

    
    $amy = new Employee();
    $amy->__constructor("Amy", "Jones", "(850)520-1109", "Rm 242");

    
    $norman = new Employee();
    $norman->__constructor("Norman", "Roberts", "(904)102-3203", "Rm 255");
 
    
    $sally = new Employee();
    $sally->__constructor("Sally", "Worth", "(850)111-9999", "Rm 202");
    

    
    $mark = new Employee();
    $mark->__constructor("Mark", "Sampson", "(223)445-6677", "Rm 301");
    

    
    $jeff = new Employee();
    $jeff->__constructor("Jeff", "Richards", "(850)444-3233", "Rm 104");
    

    $people = array($jeff, $mark, $amy, $norman, $sally, $robert);
    



//-----------------------------------------------------------------------------
/**
 *Refill all fields of the form 
 * 
 * @param string $field
 */
    
    function refill($field){
        if (isset($_POST[$field])) {
           echo $_POST[$field];
        }

    }


//-----------------------------------------------------------------------------
/**
 *Echo out the directory table 
 * 
 * @param array $array 
 */

    function directory($array) {
        
    echo "<table border = '1' cellpadding = '5'>";
    echo "<tr><th>Name</th><th>Phone</th><th>Office</th></tr>";
    foreach($array as $v) {

        echo "<tr>";
        echo "<td>" . $v->get_lname() . ", " . $v->get_fname() . "</td>";
        echo "<td>" . $v->get_phone() . "</td>";
        echo "<td>" . $v->get_office() . "</td>";
        echo "</tr>";
    }
    echo "</table";

    
}

//-----------------------------------------------------------------------------

    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
            if ($success === TRUE) { 
                
                $phone = trim($_POST['phone']);
                $ac = substr($phone, 0, 3);
                $f3 = substr($phone, 3, 3);
                $l4 = substr($phone, 6, 4);

                $f_phone = "($ac)$f3-$l4";

                $fname = trim($_POST['fname']);

                $lname = trim($_POST['lname']);

                $office = trim($_POST['office']);
                
                $office = "Rm " . $office;

                $person = new Employee();
                $person->__constructor($fname, $lname, $f_phone, $office);


                $people[] = $person;
                
                directory($people);
                
                echo "<bold> You have been added! </bold><br />";
                
                
            }
            else if (count($errors) > 0) {
                echo "<ul>";
                foreach ($errors as $err) {
                    echo "<li>" . $err . "</li>";
                }
                echo "</ul>";
            
  
            }
            

        
    ?>
        
        
        <form action="index.php" method="post">
            <fieldset>
                
                <legend>Employee Info</legend>
                
                <label>First Name:</label><br />
                <input name="fname" type="text" value="<?php refill('fname'); ?>"/><br /><br />
                
                <label>Last Name:</label><br />
                <input name="lname" type="text" value="<?php refill('lname'); ?>"/><br /><br />
                
                <label>Phone:</label><br />
                <input name="phone" type="text" value="<?php refill('phone'); ?>"/><br /><br />
                
                <label>Office:</label><br />
                Rm<input name="office" type="text" value="<?php refill('office'); ?>"/><br /><br />
                                
                <label>Display in Directory?</label>
                <input name="display" type="checkbox" value="<?php refill('display'); ?>"/><br /><br />
                
                <button type="submit">Submit</button>
                
            </fieldset>
         
        </form>

 
        


        
    </body>
</html>
