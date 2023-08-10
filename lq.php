<?php
include("connection.php");
if(isset($_POST['submit'])){
	$regno=$_POST['regno'];
    $lp_price1=$_POST['lp_price1'];
    $lp_price2=$_POST['lp_price2'];
    $lp_price3=$_POST['lp_price3'];
    $lp_price4=$_POST['lp_price4'];
    $lp_point1=$_POST['lp_point1'];
    $lp_point2=$_POST['lp_point2'];
    $lp_point3=$_POST['lp_point3'];
    $lp_point4=$_POST['lp_point4'];
    $lp_point=$lp_point1+$lp_point2+$lp_point3+$lp_point4;
$lfile_name1 = $_FILES['lfile2']['name'];
	$file_tmp = $_FILES['lfile2']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$lfile_name1);
    $lfile_name2 = $_FILES['lfile3']['name'];
	$file_tmp = $_FILES['lfile3']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$lfile_name2);
    $lfile_name3 = $_FILES['lfile4']['name'];
	$file_tmp = $_FILES['lfile4']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$lfile_name3);
    $lfile_name4 = $_FILES['lfile5']['name'];
	$file_tmp = $_FILES['lfile5']['tmp_name'];
	move_uploaded_file($file_tmp,"./pdf/".$lfile_name4);
    $insertquery ="INSERT INTO leaderquality(regno,lq_price1,lq_price2,lq_price3,lq_price4,
    lq_point1,lq_point2,lq_point3,lq_point4,lq_file1,lq_file2
    ,lq_file3,lq_file4,lq_point) VALUES 
    ('$regno','$lp_price1','$lp_price2','$lp_price3','$lp_price4',
    '$lp_point1','$lp_point2','$lp_point3','$lp_point4','$lfile_name1','$lfile_name2',
    '$lfile_name3','$lfile_name4','$lp_point')";
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

<html>
    <head>
            <div style="background-color:blue">
            <center>
                <br>
            <h3 style="color:white"> LEADERSHIP QUALITIES   </h3>

            
          <br><br></center>
</div>
<style>
  #button{
 padding: 10px;
 width: 100px;
 color: white;
 background-color: #0057ff;
 border: none;
 }
 body{
   background-image:url("1.jpeg");
	 
   background-repeat: no-repeat;
   background-size: cover;
   }  
    #heading
    {
     display:flex;
     justify-content:space-around;
    }
.container{

overflow: hidden;
width: 1000px;
background-color:#f7f7f7;
align-items:center;
padding: 15px;
position:absolute;
border-radius: 10px;
transform:translate(300px,15px);
}
</style>
</head>
<body>
<div class="container" >
                <form method="post">
    
                  <br>
                   <div >
                     Roll Number: <input type="text" name="regno">
                   </div>
<br>
<table class="table table-dark" id="testTable" cellpadding="3" width="100%" align="center" cellspacing="3" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
<tr align="center" style="font-weight:bold;font-size:20;"><td>
                       <p>Categories </p></td>
                       <td></td>
                       <td><p>Participated </p></td>
                       <td><p>Prizes </p></td>
                       <td><p>Document upload </p></td>
                       <td> <p>Points</p></td>
                       <td><p>Points earned</p></td>
</tr>
                <tr align="center" class='item'><td>
     <p> Association activities</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='0' name='outkec'></td> 
   <td> <input type="checkbox" name="intercoll"  value="3" id="partispated" style="height:40px;width:20%;"></td>
   <td> <input id="price" type="number" name="lp_price1" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="lfile2"></td>
<td><input type='number' value='4' name='p1' readonly></td>
<td>
<input type="number" name="lp_point1"  id="total" readonly></td>
</tr>

<tr align="center" class='item'> <td>
   <p>Clubs</p> </td>
    <td><input type='hidden' value='0' name='outkec'></td>
   <td> <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"></td>
   <td><input type="number" name="lp_price2" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="lfile3"></td>
<td><input type='number' value='2' name='p1' readonly></td>
<td>
<input type="number" name="lp_point2" id="total" readonly></td> </tr>

<tr align="center" class='item'><td>
    <p>Achievements</p> </td>
    <td><input type='hidden' value='0' name='withpp'></td>
    <td><input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="lp_price3" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="lfile4"></td>
<td><input type='number' value='2' name='p1' readonly></td>
<td>
<input type="number" name="lp_point3" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Discipline</p></td>
    <td><input type='hidden' value='0' name='pp'></td>
    <td><input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="lp_price4" id="price"min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="lfile5"></td>
<td><input type='number' value='2' name='p1' readonly></td>
<td>
<input type="number" name="lp_point4" id="total" readonly></td></tr>

</table>
<br>
<button type="submit" name="submit" id="button" style = "position:fixed; left:500px;">Submit</button><br>
                </form>
            </div>
            
 

           
</p>
</div>
<script>window.onkeyup=function() {
	
    var items = document.querySelectorAll(".item");
    var itemsArray = Array.prototype.slice.call(items,0);
    var price, total,tot, net = 0;
    var p1;
    itemsArray.forEach(function(el){
        price = el.querySelector('input[id="price"]').value;
        p1 = el.querySelector('input[name="p1"]').value;
        total = ((price / 5) * p1);
        tot= total.toFixed(1);
        el.querySelector('input[id="total"]').value = tot;
        net+=tot;
    });
    document.getElementById('net').value=net;
    }
    
    </script>

        </body>


</html>