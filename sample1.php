<?php error_reporting(0); ?> 
<?php 
session_start();

	include("connection.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$regno = $_POST['regno'];
		$cgpa = $_POST['cgpa'];

		if(!empty($regno) && !empty($cgpa))
		{
            $query    =mysqli_query("INSERT INTO academic(regno,cgpa)VALUES('$regno', $cgpa)");
            $result = mysqli_query($con,$query);
            $rows = mysqli_num_rows($result);
        if($rows==1){
          header("Location:index.html");
						die;
        }
     else{
    echo"invalid";
} 
}     
    }
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
  transition: 0.3s;
  width: 40%;
 margin-left: auto;
 margin-right: auto;
 vertical-align: middle;
}
#id{
	margin-left: auto;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.container {
  padding: 2px 16px;
}

input:focus, textarea:focus, select:focus{
        outline: none;
    }
	.contain{

    width: 800px;
    align:center;
    margin:50 0 0 450px;
    padding: 18px;
    position:absolute;
    border-radius: 15px;
    transform:translate(1px,5px);
	position:fixed;
 	}
</style>
</head>
<body>

<div class="contain">
<div class="card" style="justify-content: ;">
	<div class="bg-primary text-white p-1">
  		<h5>ACADEMIC POINTS</h5>
  		</div>
  		<div class="container">
         <form method="post">
  	  		<div class="col-sm-4" id="center"><br>
	    	<h2>CGPA<h5></h5></h2>
    			<div class="input-box">
                <input type="text" name="regno" placeholder="register number">   
	    		<input type="Number" name="cgpa" id="num1"placeholder="Your Current CGPA">
	    		<button  onclick="percentage_1()" name="calculate"> POINTS </button></label>
	    		<button class="btn"><i class="fa fa-upload"></i></button>
	    		<input type="text" name="totalpt1" id="value2" readonly>
	    		<input type="submit" value="submit"> 
	    	</div>
    
  </div></form>
</div>
</div>
<script type="text/javascript" src="academic.js"></script>
</body>
</html>
