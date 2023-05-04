<?php
$nameErr = $passwordErr = $emailErr = $firstnameErr = $lastnameErr =
$addressErr = $cityErr = $stateErr = $zipErr = $phoneErr = $marriageErr =
$dobErr = $genderErr = "";
// input values
$name = $password = $repeat_password = $email = $firstname = $lastname = 
$address = $address2 = $city = $state = $zip = $phone = $marriage = $dob = $gender = "";

$isValid = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //print_r($_POST);
    $repeat_password=$_POST["repeat_password"];
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
        printf("name is empty");
        $isValid = false;
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
            $isValid = false;
        }
        if(strlen($name) < 6 || strlen($name) > 50)
        {
            $nameErr = "Name must be between 6 and 50 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
        $isValid = false;
    }else{
        $password = test_input($_POST["password"]);
        if(strlen($name) < 8 || strlen($name) > 50)
        {
            $nameErr = "Name must be between 8 and 50 characters";
            $isValid = false;
        }
        if(!preg_match("/^(?=.*[!@#$%^&*(),.?\":{}|<>])(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[A-Za-z\d!@#$%^&*(),.?\":{}|<>]*$/",$password)){
            $passwordErr = "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character";
            $isValid = false;
        }
        if($password != $repeat_password){
            $passwordErr = "Passwords do not match";
            $isValid = false;
        }
    }
    if(empty($_POST["firstname"])){
        $firstnameErr = "First name is required";
        $isValid = false;
    }else{
        $firstname = test_input($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
            $firstnameErr = "Only letters and white space allowed";
            $isValid = false;
        }
        if(strlen($firstname) > 50)
        {
            $firstnameErr = "First name must be between 0 and 50 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["lastname"])){
        $lastnameErr = "Last name is required";
        $isValid = false;
    }else{
        $lastname = test_input($_POST["lastname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
            $lastnameErr = "Only letters and white space allowed";
            $isValid = false;
        }
        if(strlen($firstname) > 50)
        {
            $firstnameErr = "First name must be between 0 and 50 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["address"])){
        $addressErr = "Address is required";
        $isValid = false;
    }else{
        $address = test_input($_POST["address"]);
        if(strlen($address) > 100)
        {
            $addressErr = "Address must be between 0 and 100 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["city"])){
        $cityErr = "City is required";
        $isValid = false;
    }else{
        $city = test_input($_POST["city"]);
        if(!preg_match("/^[a-zA-Z]*$/",$city)){
            $cityErr = "Only letters";
            $isValid = false;
        }
        if(strlen($city) > 50)
        {
            $cityErr = "City must be between 0 and 50 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["state"])){
        $stateErr = "State is required";
        $isValid = false;
    }else{
        $state = test_input($_POST["state"]);
        if(strlen($state) > 52)
        {
            $stateErr = "State must be between 0 and 52 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["zip"])){
        $zipErr = "Zip is required";
        $isValid = false;
    }else{
        $zip = test_input($_POST["zip"]);
        if(!preg_match("/^[\d\-]*$/",$zip)){
            $zipErr = "Only numbers allowed";
            $isValid = false;
        }
        if(strlen($zip) < 5 || strlen($zip) > 10)
        {
            $zipErr = "Zip must be between 5 and 10 characters";
            $isValid = false;
        }
    }
    if(empty($_POST["phone"])){
        $phoneErr = "Phone is required";
        $isValid = false;
    }else{
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[\d\(\)\-\s]*$/",$phone)){
            $phoneErr = "Only numbers allowed";
            $isValid = false;
        }
        if(strlen($phone) > 14)
        {
            $phoneErr = "Phone must be between 0 and 12 characters";
            $isValid = false;
        }

    }
    if(empty($_POST["marriage"])){
        $marriageErr = "Marriage is required";
        $isValid = false;
    }else{
        $marriage = test_input($_POST["marriage"]);
    }
    if(empty($_POST["dob"])){
        $dobErr = "Date of birth is required";
        $isValid = false;
    }else{
        $dob = test_input($_POST["dob"]);
    }
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        $isValid = false;
    }else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }
    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
        $isValid = false;
    }else{
        $gender = test_input($_POST["gender"]);
    }
}
//function for testing input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>