<?php
include('conection.php');


$gasErr= $flatErr=$electricityErr=$waterErr= "";
    $gas =$flat =$electricity =$water= "";
if (isset($_POST['submit'])){
	  $build=($_POST["flat"]);
	  $gas=($_POST["gas"]);
	  $electricity=($_POST["electricity"]);
	  $water=($_POST["water"]);
$p="SELECT amount FROM payments where buildingnumbers= '$build'";
    $result=mysqli_query($conn,$p);
	if($result){
		$fassoc=mysqli_fetch_assoc($result);
				$pp=$fassoc['amount'];

$cal=$pp-($gas+$electricity+$water);
echo $cal;
$data = "INSERT INTO savings(building,saving) VALUES ('$build','$cal')";
		$s=mysqli_query($conn,$data);
			if(!$s){
				echo "not successful";
				
			}else{
				echo " successful";
			}

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
</head>
<body>  
<div class="box">
<h2>Payment page </h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="">

<label>Enter building number </label>
<input type="text" name="flat" value= "" required>
<span class="error">* <?php echo $flatErr;?></span>
<br><br>
<label>Enter Electricity Bill </label>
<input type="text" name="electricity" value="" required>
<span class="error">* <?php echo $electricityErr;?></span>
<br><br>
<label>Enter Gas Bill </label>
<input type="text" name="gas" value="" required>
<span class="error">* <?php echo $gasErr;?></span>
<br><br>
<label>Enter Water Bill </label>
<input type="text" name="water" value="" required>
<span class="error">* <?php echo $waterErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 
</form>
</div>
</body>
</html>


