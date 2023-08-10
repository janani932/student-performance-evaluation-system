<?php
include("connection.php");
if(isset($_POST['submit'])){
	$regno=$_POST['regno'];
	$ppt_price1=$_POST['ppt_price1'];
    $ppt_price2=$_POST['ppt_price2'];
    $ppt_price3=$_POST['ppt_price3'];
    $ppt_price4=$_POST['ppt_price4'];
    $ppt_price5=$_POST['ppt_price5'];
    $ppt_price6=$_POST['ppt_price6'];
    $ppt_point1=$_POST['ppt_point1'];
    $ppt_point2=$_POST['ppt_point2'];
    $ppt_point3=$_POST['ppt_point3'];
    $ppt_point4=$_POST['ppt_point4'];
    $ppt_point5=$_POST['ppt_point5'];
    $ppt_point6=$_POST['ppt_point6'];
    $ppt_point=$_POST['ppt_point'];
	$file_name1 = $_FILES['file2']['name'];
	$file_tmp = $_FILES['file2']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name1);
    $file_name2 = $_FILES['file3']['name'];
	$file_tmp = $_FILES['file3']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name2);
    $file_name3 = $_FILES['file4']['name'];
	$file_tmp = $_FILES['file4']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name3);
    $file_name4 = $_FILES['file5']['name'];
	$file_tmp = $_FILES['file5']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name4);
    $file_name5 = $_FILES['file6']['name'];
	$file_tmp = $_FILES['file6']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name5);
    $file_name6 = $_FILES['file7']['name'];
	$file_tmp = $_FILES['file7']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$file_name6);
	$insertquery ="INSERT INTO paper(regno,ppt_price1,ppt_price2,ppt_price3,ppt_price4,ppt_price5,ppt_price6,
    ppt_point1,ppt_point2,ppt_point3,ppt_point4,ppt_point5,ppt_point6,ppt_file1,ppt_file2,ppt_file3,ppt_file4,ppt_file5,ppt_file6,ppt_point) VALUES 
    ('$regno','$ppt_price1','$ppt_price2',$ppt_price3',$ppt_price4',$ppt_price5',$ppt_price6',
    '$ppt_point1','$ppt_point2','$ppt_point3','$ppt_point4','$ppt_point5','$ppt_point6','$file_name1','$file_name2',
    '$file_name3','$file_name4','$file_name5','$file_name6','$ppt_point')";
	$iquery = mysqli_query($con, $insertquery);	
	if ($iquery)
	{		
		header("Location:index.html");
}
else{
    echo"error";
}
}
?>