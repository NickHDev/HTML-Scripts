<!DOCTYPE html>
<?php
    include 'connectionInfo.php';
?>
<html lang="en">
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
<?php
    include 'inputValidate.php';
?>
<!--Navbar-->
<nav class="navbar navbar-inverse navbarBackground">
    <div class="shadowbox">''</div>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Animations</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><!-- Button to open the modal login form -->
                    <a href="#">
                        <span class="glyphicon glyphicon-log-in"></span>
                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"
                                role="button">Login
                        </button>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <button class="button1" onclick="document.getElementById('id02').style.display='block'">Sign
                            Up
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- The Modal for Login -->
<div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="close" title="Close Modal">
            <button type="button" data-dismiss="modal">&times;</button>
        </span>
    <!-- Modal Content -->
    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
        <div class="imgcontainer">
            <img src="./avatar.png" alt="Avatar" class="img-inset" width="50" height="50">
        </div>

        <div class="container-fluid">
            <h1>Log In</h1>
            <p>Please fill in this form to log into an account.</p>
            <hr>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="pdw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div class="clearfix">
                <button type="submit" class="signup">Log In</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
            </div>
        </div>
    </form>
</div>
<!-- The Modal for Sign UP-->
<div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'"
              class="close" title="Close Modal">
            <button type="button" data-dismiss="modal">&times;</button>
        </span>
    <!-- Modal Content -->
    <form id="myForm" class="modal-content animate" name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container-fluid">

            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <p><span class="error">* required field</span></p>

            <label for="name"><b>Username</b></label>
            <input id="name" required type="text" maxlength="50" minlength="6" value="<?php echo $name; ?>" placeholder="Enter Username" name="name">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>

            <label><b>Password</b></label>
            <input id="password" required type="password" maxlength="50" minlength="8" value="<?php echo $password;?>" placeholder="Enter Password" name="password">
            <span class="error">* <?php echo $passwordErr; ?></span>
            <br><br>

            <label><b>Repeat Password</b></label>
            <input required type="password" maxlength="50" minlength="8" value="<?php echo $repeat_password;?>" placeholder="Repeat Password" name="repeat_password">
            <span class="error">* <?php echo $passwordErr; ?></span>
            <br><br>

            <label><b>First Name</b></label>
            <input id="firstname" required type="text" maxlength="50" value="<?php echo $firstname;?>" placeholder="Enter Name" name="firstname">
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <br><br>

            <label><b>Last Name</b></label>
            <input id="lastname" required type="text" maxlength="50" value="<?php echo $lastname;?>" placeholder="Enter Last Name" name="lastname">
            <span class="error">* <?php echo $lastnameErr; ?></span>
            <br><br>

            <label><b>Address Line 1</b></label>
            <input id="address" required type="text" maxlength="100" value="<?php echo $address;?>" placeholder="Enter Address 1" name="address">
            <span class="error">* <?php echo $addressErr; ?></span>
            <br><br>

            <label><b>Address Line 2</b></label>
            <input type="text" maxlength="100" maxlength="100" placeholder="Enter Address 2">

            <label><b>City</b></label>
            <input required type="text" maxlength="50" value="<?php echo $city;?>" placeholder="Enter City" name="city" id="city" >
            <span class="error">* <?php echo $cityErr; ?></span>
            <br><br>

            <label><b>State</b></label>
            <select required id="state" value="<?php echo $state;?>" name="state" >
                <option value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
            </select>
            <span class="error">* <?php echo $stateErr; ?></span>
            <br><br>

            <label><b>Zip Code</b></label>
            <input required type="text" maxlength="10" minlength="5" value="<?php echo $zip;?>" placeholder="Enter Zip" name="zip" id="zip">
            <span class="error">* <?php echo $zipErr; ?></span>
            <br><br>

            <label><b>Phone Number</b></label>
            <input required type="text" maxlength="14" value="<?php echo $phone;?>" placeholder="Enter Number" name="phone" id="phone" >
            <span class="error">* <?php echo $phoneErr; ?></span>
            <br><br>

            <label><b>Email</b></label>
            <input required type="text" value="<?php echo $email;?>" placeholder="Enter Email" name="email" id="email" >
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>

            <label for="male">
                <input type="radio" <?php if (isset($gender) && $gender=="male"){ echo "checked";} ?> id="male" name="gender" value="male">Male
            </label>

            <label for="female">
                <input type="radio" <?php if (isset($gender) && $gender=="female"){ echo "checked";} ?> id="female" name="gender" value="female">Female
            </label>
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>

            <label for="married">
                <input type="radio" <?php if (isset($marriage) && $marriage=="Married"){ echo "checked";} ?> name="marriage" value="Married">Married
            </label>
            <br><br>
            <label for="notMarried">
                <input type="radio" <?php if (isset($marriage) && $marriage=="notMarried"){ echo "checked";} ?> name="marriage" value="notMarried">Not Married
            </label>
            <span class="error">* <?php echo $marriageErr; ?></span>
            <br><br>

            <label><b>Date Of Birth</b></label>
            <input required type="date" placeholder="1/1/1995" value="<?php echo $dob;?>" name="dob" id="date">
            <span class="error">* <?php echo $dobErr; ?></span>
            <br><br>

            <div class="clearfix">
                <button type="button">
                    <input type="reset">
                </button>
                <button type="submit"  name="submit" value="Submit" class="signup">Sign Up</button>
                <button type="button" onclick="document.getElementById('id02').style.display='none'"
                        class="cancelbtn">
                    Cancel
                </button>
            </div>
        </div>
    </form>
    <?php
    include 'insertValidData.php';
    ?>
</div>
<!-- Spider Content-->
<div class="container">
<div class="media">
    <div class="media-left media-middle">
        <img class="media-object block1"
             src="https://spideridentifications.com/wp-content/uploads/2019/01/Gooty-Sapphire-Tarantula.jpg"
             alt="spider" style="width:450px;height:450px;">
    </div>
    <div class="media-body">
        <h2 class="media-heading text-block">Gooty Sapphire Tarantula</h2>
        <p class="text-block">
            Poecilotheria metallica, or peacock tarantula,
            is an old world tarantula from southeast india
        </p>
    </div>
</div>
    <div class="media">
        <div class="media-body">
            <h2 class="media-heading text-block">Maratus Caeruleus</h2>
            <p class="text-block">
            Or Peacock Spider,
            the male display and courtship dance are complex,
            involving visual and vibratory signals.
            </p>
        </div>
        <div class="media-right media-middle">
            <img class="media-object block2"
                 src="https://images.squarespace-cdn.com/content/v1/5b3f4a80b40b9d2ec9523e95/1531224433048-NXAQMGVMPQP569FGVIP1/20584033858_040c23de2d_o.jpg?format=750w"
                 alt="spider" style="width:450px;height:450px;">
        </div>

    </div>
</div>
<!--Carousel Images-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="spiderCarousel"
                 src="https://www.treehugger.com/thmb/g9zg8jWEzkaXeXd9LCwfJBdJED8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-175560551-f20a1046e0764a96a5d25f78e23460e5.jpg"
                 alt="spider2" style="width:450px;height:450px;">
        </div>

        <div class="item">
            <img class="spiderCarousel"
                 src="https://assets2.cbsnewsstatic.com/hub/i/r/2016/06/07/cecfc35f-944e-4d79-a270-59e988507ed5/thumbnail/620x468/9a4c641bf9466589cee5420ccec224e9/rtsg6uy.jpg"
                 alt="spider3" style="width:450px;height:450px;">
        </div>

        <div class="item">
            <img class="spiderCarousel"
                 src="https://images.immediate.co.uk/production/volatile/sites/23/2022/09/Jumping-spiderEvarcha-arcuataljphoto7GettyImages-1382920126-ca5fbf5.jpg?quality=90&webp=true&resize=1000,667"
                 alt="spider4" style="width:450px;height:450px;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--Footer-->
<footer class="container-fluid text-center body">
    <p><a href="https://animals.sandiegozoo.org/animals/spider" target="_blank">More About Spiders</a></p>
</footer>
</body>
</html>