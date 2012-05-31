<?php

require ('Validation.php');

require ('dbconnect.php');

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
   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        /**
         *format the validated info and insert it into the DB 
         */
            if ($success === TRUE) { 
                
            $phone = trim($_POST['phone']);
            $ac = substr($phone, 0, 3);
            $f3 = substr($phone, 3, 3);
            $l4 = substr($phone, 6, 4);

            $f_phone = "($ac)$f3-$l4";

            $fname = trim($_POST['fname']);

            $lname = trim($_POST['lname']);

            $office = trim($_POST['office']);
            
            $connect = new Dbconnect();
            $connect->connect();
            $connect->insert_query($fname, $lname, $f_phone, $office);
                
                echo "You have been added!<br />";
                
                
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

        <form method="link" action="directory.php">
            <fieldset>
                <input type="submit" value="View Directory">
            </fieldset>
        </form>
        
        


        
    </body>
</html>
