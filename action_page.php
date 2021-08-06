<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_POST['submit'])) {

               $username = $_POST['name'];
               echo "Username: ".$username. "<br/>"
               
            }        
        ?>
    </body>
</html>
