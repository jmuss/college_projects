<?php require ('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Employee Directory</h1>
        <?php
            $connect = new Dbconnect();
            $connect->connect();
            $connect->select_query();
        ?>
    </body>
</html>
