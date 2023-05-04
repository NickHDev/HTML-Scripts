<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First Webpage</title>
    <link href="./colors.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./myScript.js"></script>
</head>
<body class="body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name;?>" readonly>
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="<?php echo $password;?>" readonly>
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email;?>" readonly>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname;?>" readonly>
    <span class="error">* <?php echo $firstnameErr;?></span>
    <br><br>
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname;?>" readonly>
    <span class="error">* <?php echo $lastnameErr;?></span>
    <br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $address;?>" readonly>
    <span class="error">* <?php echo $addressErr;?></span>
    <br><br>
    <label for="city">City:</label>
    <input type="text" name="city" id="city" value="<?php echo $city;?>" readonly>
    <span class="error">* <?php echo $cityErr;?></span>
    <br><br>
    <label for="state">State:</label>
    <input type="text" name="state" id="state" value="<?php echo $state;?>" readonly>
    <span class="error">* <?php echo $stateErr;?></span>
    <br><br>
    <label for="zip">Zip Code:</label>
    <input type="text" name="zip" id="zip" value="<?php echo $zip;?>" readonly>
    <span class="error">* <?php echo $zipErr;?></span>
    <br><br>
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" value="<?php echo $phone;?>" readonly>
    <span class="error">* <?php echo $phoneErr;?></span>
    </form>
</body>
</html>
