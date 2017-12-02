
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
<!DOCTYPE HTML>  
<html>
<head>
<style>

		body {
			background: url(images.jpg) no-repeat center center fixed; 
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;
			}
			p{
			text-align:center;
			}
		.box{
			width:400px;
			height:400px;
			background: rgba(0,0,0,0,4);
			padding:40px;
			color: black;
			margin: 0 auto;
			marging-top:140px;
			text-align:center;
		}
	
</style>
</head>
<body>  
<div class="box">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="">
  Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="email" name="email" required><?php if(isset($_POST['email'])) echo $_POST['email']; ?>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  phone No:<input type="text" name="phoneno"><?php if(isset($_POST['phoneno'])) echo $_POST['phoneno']; ?>
  <span class="error">* <?php echo $phonenoErr;?></span>
  <br><br>
  building number:<input type="text" name="build">
  <span class="error">* <?php echo $buildErr;?></span>
  <br><br>
  Flat numbers for rent:<input type="text" name="flat"><?php if(isset($_POST['flat'])) echo $_POST['flat']; ?>
  <span class="error">* <?php echo $flatErr;?></span>
  <br><br>
  Rent Amount:<input type="text" name="rent"><?php if(isset($_POST['rent'])) echo $_POST['rent']; ?>
  <span class="error">* <?php echo $rentErr;?></span>
  <br><br>
  Password: <input type="password" name="password" size=8><?php if(isset($_POST['password'])) echo $_POST['password']; ?>
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  ConfirmPassword: <input type="password" name="ConfirmPassword" size=8>
  <span class="error">* <?php echo $ConfirmPasswordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>
</div>
</body>
</html>


