<?php
ob_start();
if($isValid){
    try{
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpassword);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // Prepare the SQL statement
        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName, address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
         VALUES (:name, :password, :firstname, :lastname, :address1, :address2, :city, :state, :zip, :phone, :email, :gender, :maritalStatus, :dob)");
        // Bind parameters to the SQL statement
        $sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':address1', $address);
        $sql->bindParam(':address2', $address2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zip', $zip);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $marriage);
        $sql->bindParam(':dob', $dob);

        // Execute the SQL statement
        $sql->execute();
        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = $last_id;
        // Redirect to confirmation page
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'confirmation.php';
        header("Location: http://$host$uri/$extra");
    }
    catch(PDOException $e){
        echo "connection failed" . $e->getMessage();
    }
    // Close connection
    finally{
        $conn = null;
    }   
}
ob_end_flush();
?>