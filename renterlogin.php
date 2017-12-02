<!DOCTYPE html>
<html lang="en">
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
<body>  
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Renter Login</h3>
                    </div>
                    <div class="panel-body">
<form method="post" action="">
  <div class="form-group">
                                    <input class="form-control" placeholder="Input Your Name" name="name" type="text" required<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" 
                                </div>
  <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
  <input type="submit" name="submit" value="login"> 
</form>
</div>
</body>
</html>
<?php

if ($_POST){
	
	$servername= "localhost";
	$username = "root";
	$dbpassword = "";
	$databasename="data";
	
	$conn = new mysqli($servername, $username, $dbpassword,$databasename);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "Connection Suceesfull\n";
	}
	session_start();
	if(isset($_SESSION['name'])){
		header('Location: show.php');
	}
	
		$Name=$_POST['name'];
		$Password=$_POST['password'];
	
		$Query = "select * from renterinfo where rentername='$Name' and renterpassword='$Password'";
			

		if($result = mysqli_query($conn, $Query))
		{
			if(mysqli_num_rows($result)>0)
				{
				echo "<table>";
					echo "<tr>";
						echo "<th>renterid</th>";
						echo "<th>rentername</th>";
						echo "<th>renteremail</th>";
						echo "<th>renterphoneno</th>";
						echo "<th>renterpassword</th>";
						echo "<th>advance</th>";
						echo "<th>buildingnumber</th>";
					echo "</tr>";
							
				while($row = mysqli_fetch_array($result))
					{
					echo "<tr>";
						echo "<td>" . $row['renterid'] . "</td>";
						echo "<td>" . $row['rentername'] . "</td>";
						echo "<td>" . $row['renteremail'] . "</td>";
						echo "<td>" . $row['renterphoneno'] . "</td>";
						echo "<td>" . $row['advance'] . "</td>";
						echo "<td>" . $row['buildingnumber'] . "</td>";
					echo "</tr>";
					}	
				echo "</table>";
				mysqli_free_result($result);
				header("Location: payment.php");
                exit();
				}
			else
			{
				echo "* UserName or Password incorrect";
			}
		}
			
		else
		{
			echo "ERROR: Could not to execute $sqlQuery. " . mysqli_error($conn);
		}
  
  
  $conn->close();
  }
?>

