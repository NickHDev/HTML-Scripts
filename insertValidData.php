<?php
if($isValid){
    try{
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // Prepare the SQL statement
        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName, address1, 
        city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
        VALUES (:name, :password, :firstname, :lastname,'','', '', '', '', '', '', '', CURRENT_DATE())");
        // Bind parameters to the SQL statement
        $sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':address', $address);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zipCode', $zip);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $maritalStatus);
        $sql->bindParam(':dateOfBirth', $dateOfBirth);

        // Execute the SQL statement
        $sql->execute();
        // Echo successful message
        echo "New record created successfully";
        $last_id = $conn->lastInsertId();
        echo "Last inserted ID is: " . $last_id;
        $_SESSION["last_id"] = $last_id;
        // Redirect to confirmation page
        header("Location: confirmation.php");
    }
    catch(PDOException $e){
        echo "connection failed" . $e->getMessage();
    }
    // Close connection
    finally{
        $conn = null;
    }
}
?>