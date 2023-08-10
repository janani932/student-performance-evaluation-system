<?php
include("connection.php");
if(isset($_POST['submit'])){
	  $regno=$_POST['regno'];
    $pjt_price1=$_POST['pjt_price1'];
    $pjt_price2=$_POST['pjt_price2'];
    $pjt_price3=$_POST['pjt_price3'];
    $pjt_price4=$_POST['pjt_price4'];
    $pjt_price5=$_POST['pjt_price5'];
    $pjt_point1=$_POST['pjt_point1'];
    $pjt_point2=$_POST['pjt_point2'];
    $pjt_point3=$_POST['pjt_point3'];
    $pjt_point4=$_POST['pjt_point4'];
    $pjt_point5=$_POST['pjt_point5'];
    $pjt_point=$pjt_point1+$pjt_point2+$pjt_point3+$pjt_point4+$pjt_point5;
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
    $insertquery ="INSERT INTO project(regno,pjt_price1,pjt_price2,pjt_price3,pjt_price4,pjt_price5,
    pjt_point1,pjt_point2,pjt_point3,pjt_point4,pjt_point5,pjt_file1,pjt_file2
    ,pjt_file3,pjt_file4,pjt_file5,pjt_point) VALUES 
    ('$regno','$pjt_price1','$pjt_price2','$pjt_price3','$pjt_price4','$pjt_price5',
    '$pjt_point1','$pjt_point2','$pjt_point3','$pjt_point4','$pjt_point5','$file_name1','$file_name2',
    '$file_name3','$file_name4','$file_name5','$pjt_point')";
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
            <h3 style="color:white"> PROJECT    </h3>

            
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
<div class="container" action="project.php">
                <form method="post" >
    
                  <br><br>
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
     <p> Final Year Project</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='0' name='outkec'></td> 
   <td> <input type="checkbox" name="intercoll"  value="3" id="participated" style="height:40px;width:20%;"></td>
   <td> <input id="price" type="number" name="pjt_price1" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file2"></td>
<td><input type='number' value='6' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point1"  id="total" readonly></td>

</tr>

<tr align="center" class='item'> <td>
   <p>Mini Project/OHE</p> </td>
    <td><input type='hidden' value='0' name='outkec'></td>
   <td> <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"></td>
   <td><input type="number" name="pjt_price2" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file3"></td>
<td><input type='number' value='4' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point2" id="total" readonly></td>
 </tr>

<tr align="center" class='item'><td>
    <p>Prize-Project</p> </td>
    <td><input type='hidden' value='0' name='withpp'></td>
    <td><input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="pjt_price3" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file4"></td>
<td><input type='number' value='3' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point3" id="total" readonly></td>
</tr>

<tr align="center" class='item'><td>
    <p>Project Outside KEC & prize</p></td>
    <td><input type='hidden' value='0' name='pp'></td>
    <td><input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="pjt_price4" id="price"min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file5"></td>
<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point4" id="total" readonly></td>
</tr>

<tr align="center" class='item'><td>
    <p>Won many prizes</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price5' min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file6"></td>
<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point5" id="total" readonly></td>
</tr>

</table>
<br>
    <button type="submit" name="submit" id="button" style = "position:fixed; left:500px;">Submit</button>
<br>

</form>
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

