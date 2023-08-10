<?php 
session_start();

	include("connection.php");

		//something was posted
		$regno = $_POST['regno'];
		$cgpa = $_POST['cgpa'];
    	//$proof1 = $_POST['proof1'];
    	$totalpt1 = $_POST['totalpt1'];
        $qry="SELECT * FROM studentdetail WHERE 'regno'='$regno'";
        $result = mysqli_query($con,$qry);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $query    =mysqli_query("INSERT INTO academic(regno,cgpa,totalpt1)VALUES('$regno', $cgpa,  $totalpt1)");
            $result = mysqli_query($con, $query);
			$rows = mysqli_num_rows($result);
			if ($rows == 1) {
          header("Location:index.html");
	 
						die;
        }
     else{
    echo"invalid";
   }
    
}     

?>

<html>
    <head>
        <body>
            <div style="background-color:blue">
            <center>
                <br>
            <h3 style="color:white"> Academic details  </h3>
          <br><br></center>
</div>
<style>
    
    #heading
    {
     display:flex;
     justify-content:space-around;
    }
</style>
</head>
            <div>
                <form  method="post">
    
                  <br>
                   <div >
                     Roll Number: <input type="text" name="regno">
                   </div>
<br>
<table id="testTable" cellpadding="3" width="100%" align="center" cellspacing="3" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
<tr align="center" style="font-weight:bold;font-size:20;"><td>
                       <p>Category </p></td>
                       <td></td>
                       <td><p>CGPA </p></td>
                     
                       <td> <p>Points</p></td>
</tr>
                <tr align="center"><td>
     <p> Academic</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='' name='outkec'></td> 
  
   <td> <input id="num1" type="number" name="cgpa" ></td>
<td><button  onclick="percentage()"> POINTS </button>
<input type="number"   id="value2" name="totalpt1" readonly></td></tr>
</table><br><br>
<center>
<input  style="color:white;background-color:blue;height:40px;width:10%;" type="submit" value="submit">
<input  onclick="button()" style="color:white;background-color:blue;height:40px;width:10%;" type="submit" value="Points earned">
</center>
<script type="text/javascript" src="academic.js"></script>
<?php
        function button() {
            echo $totalpt1;
        }

    ?>
 
</body>
</html>
