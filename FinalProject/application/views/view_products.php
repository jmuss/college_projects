    <div id="container">
        
        <h1>Products</h1>
        
        <table><tbody>  
                                
        <?php 
        
        foreach ($data as $row)

            {
                
                echo "<tr>";
                
                echo "<td>$row->prd_picture</td>";

                echo "<td><ul>";
                
                echo "<li> $row->prd_id </li>";

                echo "<li> $row->prd_name </li>";

                echo "<li> $row->prd_description </li>";
   
                echo "<li> $ $row->prd_price </li>";
                
                echo "</ul></td>";

                echo "</tr>";

            }

        ?>
        </tbody></table>
        
    </div>
