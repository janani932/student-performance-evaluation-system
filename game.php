<?php
include("connection.php");
if(isset($_POST['submit'])){
	  $regno=$_POST['regno'];
      $pjt_price1=$_POST['pjt_price1'];
      $pjt_price2=$_POST['pjt_price2'];
      $pjt_price3=$_POST['pjt_price3'];
      $pjt_price4=$_POST['pjt_price4'];
      $pjt_price5=$_POST['pjt_price5'];
      $pjt_pric6=$_POST['pjt_price6'];
      $pjt_price7=$_POST['pjt_price7'];
      $pjt_price8=$_POST['pjt_price8'];
      $pjt_price9=$_POST['pjt_price9'];
      $pjt_point1=$_POST['pjt_point1'];
      $pjt_point2=$_POST['pjt_point2'];
      $pjt_point3=$_POST['pjt_point3'];
      $pjt_point4=$_POST['pjt_point4'];
      $pjt_point5=$_POST['pjt_point5'];
      $pjt_point6=$_POST['pjt_point6'];
      $pjt_point7=$_POST['pjt_point7'];
      $pjt_point8=$_POST['pjt_point8'];
      $pjt_point9=$_POST['pjt_point9'];
      $pjt_point=$pjt_point1+$pjt_point2+$pjt_point3+$pjt_point4+$pjt_point5+$pjt_point6+$pjt_point7+$pjt_point8+$pjt_point9;
      $insertquery ="INSERT INTO game(regno,g_price1,g_price2,g_price3,g_price4,g_price5,g_price6,g_price7,g_price8,g_price9,
      g_point1,g_point2,g_point3,g_point4,g_point5,g_point6,g_point7,g_point8,g_point9,g_point) VALUES 
      ('$regno','$pjt_price1','$pjt_price2','$pjt_price3','$pjt_price4','$pjt_price5','$pjt_price6','$pjt_price7','$pjt_price8','$pjt_price9',
      '$pjt_point1','$pjt_point2','$pjt_point3','$pjt_point4','$pjt_point5','$pjt_point6','$pjt_point7','$pjt_point8','$pjt_point9','$pjt_point')";
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
            <h3 style="color:white">GAME,SPORTS AND CULTURAL ACTIVITIES    </h3>

            
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
transform:translate(300px,12px);
}
</style>
</head>
<body>
<div class="container">
                <form method="post" >
    
                  <br><table  id="testTable" cellpadding="3" width="100%" align="center" cellspacing="4" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
                 
                     <tr align="center" class='item'>
                        <td align="left">Roll Number: <input type="text" name="regno"></td><td align="right">
                                   Document Upload: <input type="file" >
                  </td></tr>
              </table>
<br>
<table class="table table-dark" id="testTable" cellpadding="3" width="100%" align="center" cellspacing="3" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
<tr align="center" style="font-weight:bold;font-size:20;"><td>
                       <p>Categories </p></td>
                       <td></td>
                       <td><p>Participated </p></td>
                       <td><p>Prizes </p></td>
                     
                       <td> <p>Points</p></td>
                       <td><p>Points earned</p></td>
</tr>
                <tr align="center" class='item'><td>
     <p> Intramurals/culturals</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='0' name='outkec'></td> 
   <td> <input type="checkbox" name="intercoll"  value="3" id="partispated" style="height:40px;width:20%;"></td>
   <td> <input id="price" type="number" name="pjt_price1" min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='2' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point1"  id="total" readonly></td>
</tr>

<tr align="center" class='item'> <td>
   <p>Won prizes</p> </td>
    <td><input type='hidden' value='0' name='outkec'></td>
   <td> <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"></td>
   <td><input type="number" name="pjt_price2" id="price" min='0' max='5' pattern="[1-5]{1}"></td>
<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point2" id="total" readonly></td> </tr>

<tr align="center" class='item'><td>
    <p>College level prizes</p> </td>
    <td><input type='hidden' value='0' name='withpp'></td>
    <td><input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="pjt_price3" id="price" min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point3" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Rep in college team</p></td>
    <td><input type='hidden' value='0' name='pp'></td>
    <td><input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="pjt_price4" id="price"min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point4" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Rep in college team<br>Won Prize</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price5' min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point5" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Inter zone</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price6' min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point6" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Rep in university team</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price7' min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point7" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>Rep in University team>2 yrs</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price8' min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>
<input type="number" name="pjt_point8" id="total" readonly></td></tr>

<tr align="center" class='item'><td>
    <p>National team<br>Won Prize</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" id="price" name='pjt_price9' min='0' max='5' pattern="[1-5]{1}"></td>

<td><input type='number' value='1' name='p1' readonly></td>
<td>


</table>
<button type="submit" name="submit" id="button" style = "position:fixed; left:500px;">Submit</button>
   <br><br>

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