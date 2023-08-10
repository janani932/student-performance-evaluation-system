<?php
include("connection.php");
if(isset($_POST['submit'])){
	$regno=$_POST['regno'];
	$point1=$_POST['point1'];
	$cgpa=$_POST['cgpa'];
	$file_name = $_FILES['file1']['name'];
	$file_tmp = $_FILES['file1']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name);
	$insertquery ="INSERT INTO academic(regno,cgpa,filename,point1) VALUES ('$regno','$cgpa','$file_name',$point1)";
	$iquery = mysqli_query($con, $insertquery);	
	if ($iquery)
	{		
		header("Location:index.html");
}
}
?>
<!--html>
    <body>
        <div class="container">
            <form  method="post" enctype="multipart/form-data">
                <input type="text" name="regno" placeholder="Register number">
                <input type="number" name="cgpa" id="num1">
                <input type="file" name="file1" accept=".pdf"  >
                <input type="number" name="point1" id="value2" readonly>
                <button type="submit" name="submit" onclick="percentage_1()">Submit</button>
                
            </form>

        </div>
        <script type="text/javascript" src="academic.js"></script>
    </body>
</html-->

