<?php $this->load->helper('url');?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Products</title>
        
        <link rel="stylesheet" type="text/css" href="../../design/default.css" />
        
    </head>
    <body>
        
    <div id="container">
        
        <h1>One Way Imports</h1>
        
        <?php 
            $login_page = site_url("users_control/register"); 
            echo "<a href=" . $login_page . ">Sign up!</a>"; 

            echo validation_errors(); 

            echo form_open('main_control/login');
        ?>

        <fieldset>
            <legend>
                Login Here:
            </legend>

            <label>Username</label>
            <input name="user" type="text" value="<?php echo set_value('name'); ?>" />

            <label>Password</label>
            <input name="pass" type="password" value="pass" />

            <button type="submit">Submit</button>
        </fieldset>

        <table><tbody>
        
        <?php
        
            $home_page = site_url("main_control/");
            $products_page = site_url("products_control/all");
            $rings_page = site_url("products_control/rings");
            $necklaces_page = site_url("products_control/necklaces");
            $earrings_page = site_url("products_control/earrings");
        
            echo "<tr>";
            
            echo "<td>" . "<a href=" . $home_page . ">Home</a>" . "</td>";
            echo "<td>" . "<a href=" . $products_page . ">Products</a>" . "</td>";
            echo "<td>" . "<a href=" . $rings_page . ">Rings</a>" . "</td>";
            echo "<td>" . "<a href=" . $necklaces_page . ">Necklaces</a>" . "</td>";
            echo "<td>" . "<a href=" . $earrings_page . ">Earrings</a>" . "</td>";
            
            echo"</tr>";
        ?>
                
        </tbody></table>