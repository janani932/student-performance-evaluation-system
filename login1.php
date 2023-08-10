<?php 

session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$uname = $_POST['uname'];
		$utype = $_POST['utype'];
		$pwd = $_POST['pwd'];

		if(!empty($uname) && !empty($pwd))
		{

			//read from database
			 $query    = "SELECT * FROM signup WHERE uname='$uname' AND utype='$utype'
                     AND pwd='$pwd'";
			$result = mysqli_query($con, $query);
			$rows = mysqli_num_rows($result);
			if ($rows == 1) {
          header("Location:index.html");
	 
						die;
		}
		else
		{
			echo '<script>alert("Please enter valid details!")</script>';
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
	<link rel="stylesheet" href="s2.css">
	<link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <style>
 	.container{
 		background-color: grey;
 		overflow: hidden;
    width: 250px;
    align:center;
    margin:50 0 0 450px;
    padding: 18px;
    position:absolute;
    border-radius: 15px;
    transform:translate(600px,100px);
	position:fixed;
 	}

 </style>
</head>
<body>

	<div class="container">
			<form method="post" align="center">
			<center><h2>Register</h2></center>
			<div style="max-width:400px;margin:auto">
			<div class="input-icons">
				<i class="fa fa-user icon"></i>
			<input id="text" class="input-field" type="text" name="uname" placeholder="User name" required> 
           <br><br>
		   <div class="input-icons">
			<i class="fas fa-users icon"></i>     	
    <select  id="text" class="input-field"
              name="utype" placeholder="User type" required =""
              aria-label="Default select example">
         <option value="" disabled selected hidden>User type</option>
        <option  value="admin">Admin</option>
        <option value="student">Student</option>
        <option value="classadvisor">Class Advisor</option>
        <option value="HOD">HOD</option>
      </select></div><br>
			<i class="fa fa-lock icon"></i>
			<input id="text" class="input-field" type="password" name="pwd" style="-webkit-text-security: circle"  placeholder="Password" minlength="5" maxlength="8" required><br><br>
		</div>


			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
		<script>
		function myFunction() {
  var x = document.getElementById("text");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
</div>
</body>
</html>