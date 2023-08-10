<?php 
session_start();

	include("connection.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$uname = $_POST['uname'];
		$utype = $_POST['utype'];
    	$email = $_POST['email'];
    	$phoneno = $_POST['phoneno'];
    	$pwd = $_POST['pwd'];

		if(!empty($uname) && !empty($pwd) )
		{

			//save to database
			
			$query = "INSERT into signup (uname,utype,email,phoneno,pwd) VALUES ('$uname','$utype', '$email','$phoneno','$pwd')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo '<script>alert("Please enter valid details!")</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="s2.css">
<link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
 	.container{
 		background-color: grey;
 		overflow: hidden;
    width: 350px;
    align:center;
    margin:40 0 0 300px;
    padding: 20px;
	
    position:absolute;
    border-radius: 15px;
    transform:translate(600px,100px);
 	}
 </style> 

</head>
<body>


	<div class="container">
		
		<form method="post" align="center">
			<center><h2>Register</h2></center>
			<div style="max-width:400px;margin:auto">
				<div class="field username">

			<div class="input-icons">
				<i class="fa fa-user icon"></i>
			<input id="text" class="input-field" type="text" name="uname" placeholder="User name" required/> 
           <br><br>
      <div class="input-icons">
			<i class="fas fa-users icon"></i>     	
    <select class="input-field" id="text"
              name="utype" placeholder="User type" required =""
              aria-label="Default select example">
         <option value="" disabled selected hidden>User type</option>
        <option  value="admin">Admin</option>
        <option value="student">Student</option>
        <option value="classadvisor">Class Advisor</option>
        <option value="HOD">HOD</option>
      </select></div>
       <div class="field email">
			<i class="fa fa-envelope icon"></i>
			<input id="text" class="input-field" type="text" name="email" placeholder="Email" pattern="^(.+)@(.+)\.[a-z]{2,3}" required ></div><br>
			<i class="fa fa-phone icon"></i>
			<input id="text" class="input-field" type="text" name="phoneno" placeholder="Mobile number" pattern="[6789]{1}[0-9]{9}" required ><br><br>
			<i class="fa fa-lock icon"></i>
			<input id="pass" class="input-field" type="password" name="pwd" placeholder="Password" minlength="5" maxlength="15" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{8,}$" required="Must contain atleast one uppercase,lowercase,number and special character" style=" height: 40px; border-radius: 10px;border: solid thin #aaa;">
		<input type="checkbox" onclick="myFunction()">Show Password
		<br><br>
		</div>
	</div>
			<input id="button" type="submit" value="Signup" required ><br><br>

			<a href="login.php" style="color:white;">Click to Login</a><br><br>
		</form>
	</div>
	<script>
		function myFunction() {
  var x = document.getElementById('pass');
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
</body>
</html>