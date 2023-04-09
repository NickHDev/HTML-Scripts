<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <h1>Confirmation</h1>
    <?php
    foreach($_POST as $key => $value){
        echo $key . " = " . $value . "<br>";
    }
    ?>
</body>
</html>
