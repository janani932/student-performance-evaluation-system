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
    $ppt_point=$ppt_point1+$ppt_point2+$ppt_point3+$ppt_point4+$ppt_point5+$ppt_point6;
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
    ppt_point1,ppt_point2,ppt_point3,ppt_point4,ppt_point5,ppt_point6,ppt_file1,ppt_file2
    ,ppt_file3,ppt_file4,ppt_file5,ppt_file6,ppt_point) VALUES 
    ('$regno','$ppt_price1','$ppt_price2','$ppt_price3','$ppt_price4','$ppt_price5','$ppt_price6',
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
<html>
<head>
            <div style="background-color:blue">
            <center>
                <br>
            <h3 style="color:white"> PAPER PRESENTATION    </h3>

            
          <br><br></center>
</div>
<style>
    
    #heading
    {
     display:flex;
     justify-content:space-around;
    }
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
   .container{

overflow: hidden;
width: 1000px;
background-color:#f7f7f7;
align-items:center;
padding: 15px;
position:absolute;
border-radius: 4px;
transform:translate(300px,60px);
}
#image_src {
    background-image: url('upload.jpg');
  width: 26px;
  height: 26px;
  margin-right: 100px;
  opacity: 0;
  filter: alpha(opacity=0); /* IE 5-7 */
}
</style>
</head>
    <body>
        <div class="container">
            <form  method="post" enctype="multipart/form-data">
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
                       <td><p>Points</p></td>
                       <td> <p>Points earned</p></td>
</tr>
                <tr align="center" class='item'><td>
     <p> In KEC</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='0' name='outkec'></td> 
   <td> <input type="checkbox" name="intercoll"  value="3" id="partispated" style="height:40px;width:20%;"></td>
   <td> <input id="price" type="number" name="ppt_price1" min='0' max='5' pattern="[1-5]{1}"></td>
<td>
    <input type="file" name="file2" class="text" accept=".pdf"  style="align:right;" required>
</td>
<td><input type='number' value='3' name='p1' readonly></td>
<td>
<input type="number" name="ppt_point1"  id="total" readonly></td>
</tr>

<tr align="center" class='item'> <td>
   <p>Outside KEC</p> </td>
    <td><input type='hidden' value='0' name='outkec'></td>
   <td> <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"></td>
   <td><input type="number" name="ppt_price2" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file3"></td>
<td><input type='number' value='3' name='p1' readonly></td>
<td>
<input type="number" name="ppt_point2" id="total" readonly></td> </tr>

<tr align="center" class='item'><td>
    <p>Prize outside KEC</p> </td>
    <td><input type='hidden' value='0' name='withpp'></td>
    <td><input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="ppt_price3" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file4"></td>
<td><input type='number' value='3' name='p1' readonly></td>
<td>
<input type="number" name="ppt_point3" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Outside KEC more than 5</p></td>
    <td><input type='hidden' value='0' name='pp'></td>
    <td><input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="ppt_price4" id="price"min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file5"></td>
<td><input type='number' value='3' name='p1' readonly></td>
<td>
<input type="number" name="ppt_point4" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>PP consistency past 2 years</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='ppt_price5' min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type="file" name="file6"></td>
<td><input type='number' value='2' name='p1' readonly></td>
<td>
<input type="number" name="ppt_point5" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>IIT prizes</p></td>
   
   <td> <input type='hidden' value='0' name='p1'></td>
    <td><input type="checkbox" id="partispated"  value='1' name="iit" style="height:40px;width:20%;"></td>
   <td> <input type="number" min='0' max='5' id="price" name="ppt_price6" pattern="[1-5]{1}"/></td>
<td><input type="file" name="file7"></td>
<td><input type='number' value='1' name='p1' readonly></td>
<td><input type="number" name="ppt_point6" id="total" readonly></td></tr>
</table>  
<!--input type="number" name="ppt_point" placeholder="Total points" style = "position:fixed; right:20px;"><br--><br>
                <button type="submit" name="submit" id="button" style = "position:fixed; left:400px;">Submit</button>
   <br><br>
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