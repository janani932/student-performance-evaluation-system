<?php 
ini_set('display_errors','off');
session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $name = $_POST['name'];
     //   echo $uname;
        $roll=$_POST['roll'];
		$a = $_POST['intercoll'];
       // echo $uname;
        $a1=$_POST['outkec'];   
       // echo $a;
        $a2=$_POST['withpp'];
        $a3=$_POST['pp'];
        $a4=$_POST['2y'];
        $a5=$_POST['iit'];
        $b = $_POST['n1'];
        $b1=$_POST['n2'];
        $b2=$_POST['n3'];
        $b3=$_POST['n4'];
        $b4=$_POST['n5'];
        $b5=$_POST['n6'];
$total_Points=$a+$a1+$a2+$a3+$a4+$a5;
//echo $total_Points;
$total_prices=$b+$b1+$b3+$b3+$b4+$b5;
//echo $total_prices;
$sql="insert into ppt_details(name ,roll,inter_kec,outer_kec,with_pp,pp,with_2y,iit,n1,n2,n3,n4,n5,n6,total_points,total_prices)values(' $name','$roll','$a','$a1','$a2','$a3','$a4','$a5','$b','$b1','$b2','$b3','$b4','$b5','$total_Points','$total_prices')";
if(mysqli_query($con,$sql))
    {
     
    }

    }
   
    ?>
<html>
    <head>
        <body>
            <div style="background-color:black">
            <center>
                <br>
            <h3 style="color:white"> paper presentation  section </h3>
          <marquee style="color:white"> provide the complete  ppt partispated </marquee>
            
          <br><br></center>
</div>
<style>
    
    #heading
    {
     display:flex;
     justify-content:space-around;
    }
</style>

            <div>
                <form action ="ppt.php" method="post">
                    <h4 style="padding-left:50px">enter the number of ppt presented : </h4>
                  <br>
                   <div id="heading">
                     name: <input type="text" label="name"
                    name="name" style="height:40px;width:20%;">
                      roll no: <input type="text" name="roll" style="height:40px;width:20%;">
                        

                   </div>
<br>

                    <div id="heading" style="background-color:orange;border:double;" >
                       <p>Categories </p>
                       <p>participated </p>
                       <p>on prices </p>
                       <p>document upload </p>
                        <p>Points</p>
                   </div>
                
                <br>
<div id="heading">
     <p> Inter College</p><!--input type="label" value ="Inter college" style="height:40px;width:20%;"-->  
    <input type="checkbox" name="intercoll"  value="3" id="partispated" style="height:40px;width:20%;">
    <input type="number" id="num1" name="n1" value='3'>
<input type="file">
<input type="number" name="n1" value='3'>
</div><hr>
<div id="heading">
   <p>Outside KEC</p> <!--input type="label" value ="OUTSIDE KEC" style="height:40px;width:20%;"-->  
    <input type='hidden' value='0' name='outkec'>
    <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"><input type="number" name="n2" value='0'>
<input type="file">
<input type="number" name="n2" value='0'>
</div>
<br>
<hr>
<div id="heading">
    <p>OUTSIDE KEC WITH PRICE</p>  
    <input type='hidden' value='0' name='withpp'>
    <input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"><input type="number" name="n3" value='0'>
<input type="file">
<input type="number" name="n3" value='0'>
</div>
<br>
<hr>
<div id="heading">
    <p>PRICE OUTSIDE KEC PP</p>
    <input type='hidden' value='0' name='pp'>
    <input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"><input type="number" name="n4" value='0'>
<input type="file">
<input type="number" name="n3" value='0'>
</div>
<br>
<hr>
<div id="heading">
    <p>PP CONSISTENCY PAST 2 YEAR</p> 
    <input type='hidden' value='0' name='2y'>
    <input type="checkbox" value='2' name='2y' style="height:40px;width:20%;">
    <input type="number" value='0' name='n5'>
<input type="file">
<input type="number" name="n3" value='0'>
</div>
<br>
<hr>
<div id="heading">
    <p>IIT PRICES</p>
   
    <input type='hidden' value='0' name='iit'>
     <input type="checkbox" id="partispated"  value='1' name="iit" style="height:40px;width:20%;">
   
 
    <input type="number"  value='1' name="n6">
<input type="file">
<input type="number" name="n3" value='0'>
</div>
<br>
<hr>
<center>
<input  style="color:gold;background-color:black;height:40px;width:20%;" type="submit" value="update">
</center>
                </form>
            </div>
            
 

            <p>The total point is :<?PHP echo $total_Points ?>
</p>
<p>the total prices is :<?PHP echo $total_prices ?>
</p>
        </body>
    </head>
</html>