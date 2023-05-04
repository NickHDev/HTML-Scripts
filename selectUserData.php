<?php
ob_start();
try{
    $last_id = $_SESSION["last_id"];
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpassword);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT userName, password, firstName, lastName, address1, address2, 
    city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth".
    "FROM registration WHERE id = :last_id");
    // Bind parameters to the SQL statement
    $stmt->bindParam(':last_id', $last_id);
    // Execute the SQL statement
    $stmt->execute();
    // Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $assoc_array = $stmt->fetchAll()[0];
    $name = $assoc_array["userName"];
    $password = $assoc_array["password"];
    $firstname = $assoc_array["firstName"];
    $lastname = $assoc_array["lastName"];
    $address = $assoc_array["address1"];
    $adress2 = $assoc_array["address2"];
    $city = $assoc_array["city"];
    $state = $assoc_array["state"];
    $zip = $assoc_array["zipCode"];
    $phone = $assoc_array["phone"];
    $email = $assoc_array["email"];
    $gender = $assoc_array["gender"];
    $maritalStatus = $assoc_array["maritalStatus"];
    $dob = $assoc_array["dateOfBirth"];
}
catch(PDOException $e){
    echo "connection failed" . $e->getMessage();
}
finally{
    // Close connection
    $conn = null;
}
ob_end_flush();
?>