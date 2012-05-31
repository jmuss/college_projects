<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Directory</h1>
        <?php
            foreach ($view as $row)

            {

                echo "<tr>";

                echo "<td>" . $row->emp_fname . "</td>";

                echo "<td>" . $row->emp_lname . "</td>";

                echo "<td>" . $row->emp_phone . "</td>";

                echo "<td>" . $row->emp_office . "</td>";

                echo "</tr>";

            }

        ?>
    </body>
</html>
