
<?php
if(isset($_POST['savings'])){
	header("Location: savings.php");
  exit();
	
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
  <style>
body {
    background-image: url("p.png");
}
</style>
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
<form method="post" action="">
<h2>show of renter information.</h2>
<input type="submit" name="savings" value="check savings">
</form>
</div>
</body>
</html>




