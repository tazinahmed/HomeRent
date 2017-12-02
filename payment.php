
<?php

$areaErr= $flatErr=$amountErr=$nameErr= "";
$area =$flat =$amount =$name= "";

if ($_POST) {
	if (empty($_POST["flat"])) {
		$flatErr = "flat numbers is required";
	}
	else {
		$flat = test_input($_POST["flat"]);
	}
	if (empty($_POST["name"])) {
		$nameErr = "name is required";
	}
	else {
		$name = test_input($_POST["name"]);
	}
	  if(!empty($_POST["flat"])&&!empty($_POST["name"])){
		  
		  $flat=($_POST["flat"]);
		  $name=($_POST["name"]);
		$servername= "localhost";
		$username = "root";
		$password = "";
		$databasename="data";
		
		$amount=($_POST["amount"]);
		$conn = new mysqli($servername, $username, $password,$databasename);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$data = "INSERT INTO payments(buildingnumbers,amount,renternames) VALUES ('$flat','$amount','$name')";
		$s=mysqli_query($conn,$data);
			if(!$s){
				echo "not successful";
				
			}else{
				echo " successful";
			}
			if($amount==0){
				
				$d= "SELECT advance FROM renterinfo where buildingnumber= '$flat' and rentername='$name'";
				$c1=mysqli_query($conn,$d);
				$r="SELECT rentamount FROM ownerinfo where buildingNumber= '$flat' ";
				$c3=mysqli_query($conn,$r);
	  
				if($c1 && $c3){
				$fassoc=mysqli_fetch_assoc($c1);
				$t=$fassoc['advance'];

				$cassoc=mysqli_fetch_assoc($c3);
				$o=$cassoc['rentamount'];
				if($t>0){
					$g=$t-$o;
					$sqla="Update renterinfo set advance='$g' where buildingnumber='$flat' and rentername='$name'";
					$resulta=mysqli_query($conn,$sqla);
				}
			}
		}
		$conn->close();
}
}
	
?>
	   
			

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>

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
<script>
<?php if(($_POST["amount"])==0)?> 
function myFunction() {
    alert("PLease Pay your rent\nif you don't pay rent advance will be deducted!!!!");
}
</script>
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
         <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<div class="box">
<h2>Payment page </h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="">

<label>Enter Name</label>
<input type="text" name="name" value= "">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<label>Enter building number: </label>
<input type="text" name="flat" value= "">
<span class="error">* <?php echo $flatErr;?></span>
<br><br>
<label>Enter amount: </label>
<input type="text" name="amount" value="">
<span class="error">* <?php echo $amountErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit" onclick="myFunction()"> 
</form>
</div>
</body>
</html>


