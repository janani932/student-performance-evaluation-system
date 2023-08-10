<?php 
session_start();

	include("connection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name1 = $_POST['name1'];
		$regno = $_POST['regno'];
    	$email = $_POST['email'];
    	$gender = $_POST['gender'];
    	$dept = $_POST['dept'];
    	$course = $_POST['course'];
    	$phoneno = $_POST['phoneno'];


			//save to database
			
			$query = "INSERT into studentdetail (name1,regno,email,gender,dept,course,phoneno) VALUES ('$name1','$regno', '$email','$gender','$dept','$course','$phoneno')";

			if(mysqli_query($con, $query)){

			header("Location: index.html");
			die;
		}else
		{
			echo '<script>alert("Please enter valid details!")</script>';
		}
	}
?>
<html>
  <head>
 
<style>
  body{
  background-image:url("1.jpeg");
    
  background-repeat: no-repeat;
  background-size: cover;
  }
  .container{

 		overflow: hidden;
    width: 420px;
    background-color:#f7f7f7;
    align-items:center;
    padding: 15px;
    position:absolute;
    border-radius: 4px;
    transform:translate(600px,100px);
    
 	}
   #text{

height: 40px;
border-radius: 10px;
}
#button{
padding: 10px;
width: 100px;
color: white;
background-color: #0057ff;
border: none;
}
</style>  
</head>
  <body>
  <div class="container">
  <form  name="StudentRegistration" method="post">
<table cellpadding="3" width="100%" align="center" cellspacing="3" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">

  <tr>
  <td colspan=2>
  <center><font size=6><b>STUDENT&nbsp;DETAILS</b></font></center><br>
  </td>
  </tr>
<tr>
  <td>
    <font size=5>Name</font></td>
  <td><input type=text name="name1" id="text" size="30" pattern="[A-Z a-z]{3,25}" required></td>
  </tr>
<tr>

  <td><font size=5>Register&nbsp;Number</font></td>

  <td><input type="text" name="regno" id="text" size="30" pattern="[0-9]{2}[a-z A-Z]{3}[0-9]{3}" required></td>

  </tr>
  <tr>

  <td><font size=5>Email&nbsp;Id</font></td>

  <td><input type="text" name="email" id="text" size="30" pattern="^(.+)@(.+)\.[a-z]{2,3}" required ></td>

  </tr>
<tr>

  <td><font size=5>Gender</font></td>

  <td><input type="radio" name="gender" value="male" size="20" required><font size=4>Male</font>

  <input type="radio" name="gender" value="Female" size="20"><font size=4>Female</font></td>

  </tr>

<tr>

  <td><font size=5>Department</font></td>

  <td><select type="text" name="dept" id="text" style="width: 235px;" required>

  <option value="-1" selected>select..</option>

  <option value="B.Tech">B.TECH</option>

  <option value="MCA">MCA</option>

  <option value="MBA">MBA</option>

  <option value="BCA">BCA</option>

  </select></td>

  </tr>

<tr>

  <td><font size=5>Course</font></td>

  <td><input type="text" name="course" id="text" size="30" required></td>

  </tr>

<tr>

  <td><font size=5>Mobile&nbsp;Number</font></td>

  <td><input type="text" name="phoneno" id="text" size="30" pattern="[6789]{1}[0-9]{9}" required></td>

  </tr>
<tr> <td><br></td></tr>
  <tr>

  <td><input type="reset" id="button" style = "position:fixed; left:80px; "></td>

  <td colspan="2">
<input type="submit" id="button" value="Submit Form" style = "position:fixed; left:300px; "></td>
<tr> <td><br></td></tr> 

  </tr>

  </table>

  </form>
  </div>

  </body>

  </html>


