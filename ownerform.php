<?php

$nameErr = $passwordErr= $ConfirmPasswordErr=$emailErr=$phonenoErr=$areaErr=$flatErr=$rentErr=$buildErr= "";
$name = $password =$ConfirmPassword =$email=$phoneno=$area=$flat=$rent=$build= "";

if ($_POST) {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["flat"])) {
    $flatErr = "flat numbers is required";
  } else {
    $flat = test_input($_POST["flat"]);
  }
  if (empty($_POST["build"])) {
    $buildErr = "building number is required";
  } else {
    $build = test_input($_POST["build"]);
  }
  if (empty($_POST["phoneno"])) {
    $phonenoErr = "phoneno is required";
  } else {
    $phoneno = test_input($_POST["phoneno"]);
  }
  if (empty($_POST["rent"])) {
    $rentErr = "rent amount is required";
  } else {
    $rent = test_input($_POST["rent"]);
  }
  
  
  if ((empty($_POST["password"]))) {
    $passwordErr = "password is required";
  } if((strlen($_POST["password"]))!=8){
      $passwordErr ="size must be 8";
  }
  else {
    $password = test_input($_POST["password"]);
  }
  if (empty($_POST["ConfirmPassword"])) {
    $ConfirmPasswordErr = "ConfirmPassword is required";
  } if((strlen($_POST["ConfirmPassword"]))!=8){
      $ConfirmPasswordErr ="size must be 8";
  }
  if (($_POST["password"])!=($_POST["ConfirmPassword"])) {
    $ConfirmPasswordErr = "password must be same";
  }else {
    $ConfirmPassword = test_input($_POST["ConfirmPassword"]);
  }
  
  if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    $emailErr = " valid email is required";
  }
  else {
    $email=($_POST["email"]);
  }
   
  if(!empty($_POST["name"]) &&!empty($_POST["phoneno"])&&!empty($_POST["build"])&& !empty($_POST["password"])&& !empty($_POST["ConfirmPassword"])&& !empty($_POST["rent"])&& !empty($_POST["flat"])&& !empty($_POST["email"])&& (($_POST["password"])==($_POST["ConfirmPassword"])))
  {
      
    $servername= "localhost";
    $username = "root";
    $password = "";
    $databasename="data";
    
      $Name=($_POST["name"]);
      $Email=($_POST["email"]);
      $Phoneno=($_POST["phoneno"]);
      $Password=($_POST["password"]);
      $ConfirmPassword=($_POST["ConfirmPassword"]);
      $area=($_POST["area"]);
      $flat=($_POST["flat"]);
      $rent=($_POST["rent"]);
      $build=($_POST["build"]);
    
    $conn = new mysqli($servername, $username, $password,$databasename);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


    $ownerinfo = "INSERT INTO ownerinfo(name, email,phoneno,password,flatnumbers,rentamount,buildingNumber)
            VALUES ('$Name','$Email','$Phoneno','$Password','$flat','$rent','$build')";
            $s=mysqli_query($conn,$ownerinfo);
            if(!$s){
                echo "not successful";
                
            }else{
                echo " successful";
            }
            $conn->close();
    
  header("Location: login.php");
  exit();
  }
}

function test_input($ownerinfo) {
  $ownerinfo= trim($ownerinfo);
  $ownerinfo = stripslashes($ownerinfo);
  $ownerinfo = htmlspecialchars($ownerinfo);
  return $ownerinfo;
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
body {
    background-image: url("p.png");
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Owner</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/image.png" alt="Home rent" height="30px" width="60px" ></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SignUp <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="ownerform.php">Owner</a></li>
                                <li><a href="renter_reg.php">Renter</a></li>
                            </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signin <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Owner</a></li>
                                <li><a href="renterlogin.php">Renter</a></li>
                            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Owner Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Input Your Name" name="name"  type="text" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" /><span class="error">* <?php echo $nameErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required><?php if(isset($_POST['email'])) echo $_POST['email']; ?> <span class="error">* <?php echo $emailErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone no" name="phoneno" type="text"><?php if(isset($_POST['phoneno'])) echo $_POST['phoneno']; ?><span class="error">* <?php echo $phonenoErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Building Number" name="build" type="text"><span class="error">* <?php echo $buildErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Total number of flats for rent" name="flat" type="text"><?php if(isset($_POST['flat'])) echo $_POST['flat']; ?><span class="error">* <?php echo $flatErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Rent amount" name="rent" type="text"><?php if(isset($_POST['rent'])) echo $_POST['rent']; ?><span class="error">* <?php echo $rentErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" size=8><?php if(isset($_POST['password'])) echo $_POST['password']; ?><span class="error">* <?php echo $passwordErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="ConfirmPassword" type="password" size=8><span class="error">* <?php echo $ConfirmPasswordErr;?></span>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>