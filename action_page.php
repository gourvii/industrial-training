<!DOCTYPE html>
<html>
    <body>
        <?php
    if(isset($_POST['submit'])) {

        $username = $_POST['name'];
        echo "Username: ".$username. "<br/>"

        $email = $_POST['email']
        echo "Email id: ".$email. "<br/>"

        $email = $_POST['email']
        echo "Email id: ".$email. "<br/>"

        $phoneno = $_POST['phone']
        echo "Phone no: ".$phoneno. "<br/>"

        $AGE = $_POST['age']
        echo "Age: ".$AGE. "<br/>"

        $DOB = $_POST['dob']
        echo "Birthdate: ".$DOB. "<br/>"

        echo "Languages studied: "
        $checkbox1 = $_POST['c']
        echo .$checkbox1. ", "
        $checkbox2 = $_POST['c++']
        echo .$checkbox2. ", "
        $checkbox3 = $_POST['py']
        echo .$checkbox3. ", "
        $checkbox4 = $_POST['java']
        echo .$checkbox4. ", "
        $checkbox5 = $_POST['javas']
        echo .$checkbox5. ", "
        $checkbox6 = $_POST['html']
        echo .$checkbox6. ", "

        echo "<br/>"
        $Training = $_POST['training']
        echo "Training taken: ".$Training. "<br/>"

        $Gender = $_POST['gender']
        echo "Gender: " .$Gender. "<br/>"

        //for file

        $passw = $_POST['password']
        echo "Password: " .$passw. "<br/>"

    }        
?>
    </body>
</html>
