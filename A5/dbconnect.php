<?php
/**
 * this class does three things, connects to the database, inserts info into the 
 * database, or outputs the info from the database to the screen
 *
 * @author James Mussman
 */
class Dbconnect {
    
    public $connect;
    
//-----------------------------------------------------------------------------
/**
 * connects to the database 
 * 
 * @param none 
 */
    
    public function connect(){
    //1. connect to database
    $connect = mysql_connect('2011.ispace.ci.fsu.edu', 'jjm07c', 'djzfmnr2');
    $this->connect = $connect;
    
    //2. select database from server
    $select = mysql_select_db('jjm07c_lis4368', $connect);
    

    }
   
//-----------------------------------------------------------------------------    
/**
 * method runs a select query and prints it out
 */
    public function select_query(){
   
        //3. Run queries
        $query = "SELECT emp_lname, emp_fname, emp_phone, emp_office FROM employee";
        $result = mysql_query($query, $this->connect);

        //4. output array
        $sql_array = array();
        while ($row = mysql_fetch_assoc($result)){
            $sql_array[] = $row;
        }
        
        //5. Print directory
            echo "<table border = '1' cellpadding = '5'><tbody>";

            foreach($sql_array as $row) {                

                echo "<tr>";                

                foreach($row as $name => $value) {                    


                    echo "<td>" . $value . "</td>";

                }               

                echo "</tr>";                

            }            

            echo "</tbody></table>";

    }
    
//-----------------------------------------------------------------------------
/**
 *inserts information from form into database
 * 
 * @param string $fname
 * @param string $lname
 * @param string $phone
 * @param string $office 
 */
    public function insert_query($fname, $lname, $phone, $office) {
       $query = "INSERT INTO employee (emp_fname, emp_lname, emp_phone, emp_office) 
                  VALUES('$fname', '$lname', '$phone', '$office')";
       mysql_query($query, $this->connect);
    }
   
    
}

?>
