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
            <div style="background-color:blue">
            <center>
                <br>
            <h3 style="color:white"> paper presentation   </h3>
          <marquee style="color:white"> Provide the complete  ppt participated </marquee>
            
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
                <form method="post">
    
                  <br>
                   <div >
                     Roll Number: <input type="text" name="roll">
                   </div>
<br>
<table id="testTable" cellpadding="3" width="100%" align="center" cellspacing="3" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
<tr align="center" style="font-weight:bold;font-size:20;"><td>
                       <p>Categories </p></td>
                       <td></td>
                       <td><p>Participated </p></td>
                       <td><p>Prices </p></td>
                       <td><p>Document upload </p></td>
                       <td> <p>Points</p></td>
</tr>
                <tr align="center"><td>
     <p> Inter College</p></td><!--input type="label" value ="Inter college" style="height:40px;width:20%;"--> 
     <td><input type='hidden' value='0' name='outkec'></td> 
   <td> <input type="checkbox" name="intercoll"  value="3" id="partispated" style="height:40px;width:20%;"></td>
   <td> <input id="num1" type="number" name="n1" value='3'></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n1"  id="value1" readonly></td></tr>

<tr align="center"><td>
   <p>Outside KEC</p> </td>
    <td><input type='hidden' value='0' name='outkec'></td>
   <td> <input type="checkbox" name="outkec" value='3' style="height:40px;width:20%;"></td>
   <td><input type="number" name="n2" value='0'></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n2" id="value2" readonly></td></tr>

<tr align="center"><td>
    <p>OUTSIDE KEC WITH PRICE</p> </td>
    <td><input type='hidden' value='0' name='withpp'></td>
    <td><input type="checkbox" name='withpp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="n3" value='0'></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n3" id="value3" readonly></td></tr>

<tr align="center"><td>
    <p>PRICE OUTSIDE KEC PP</p></td>
    <td><input type='hidden' value='0' name='pp'></td>
    <td><input type="checkbox" name='pp' value='3' style="height:40px;width:20%;"></td>
    <td><input type="number" name="n4" value='0'></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n3" id="value4" readonly></td></tr>

<tr align="center"><td>
    <p>PP CONSISTENCY PAST 2 YEAR</p> </td>
   <td> <input type='hidden' value='0' name='2y'></td>
    <td><input type="checkbox" value='2' name='2y' style="height:40px;width:20%;"></td>
    <td><input type="number" value='0' name='n5'></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n3" id="value5" readonly></td></tr>

<tr align="center"><td>
    <p>IIT PRICES</p></td>
   
   <td> <input type='hidden' value='0' name='iit'></td>
    <td><input type="checkbox" id="partispated"  value='1' name="iit" style="height:40px;width:20%;"></td>
   <td> <input type="number"  value='1' name="n6"></td>
<td><input type="file"></td>
<td><button  onclick="inter()"> POINTS </button>
<input type="number" name="n3" id="value6" readonly></td></tr>
</table>
<br>

<center>
<input  style="color:gold;background-color:black;height:40px;width:20%;" type="submit" value="update">
</center>
                </form>
            </div>
            
 

            <p>The total point is :<?PHP echo $total_Points ?>
</p>
<script type="text/javascript" src="paper.js"></script>
<script>

    $(document).ready(function(){

        headings=[];
        tableRowData=[];        

        $('#testTable tr').eq(0).each(function(){

            $(this).find('td').each(function(){

                tdText=$(this).text();                  
                headings.push(tdText);
            });

        });

        tableRowData=[];            
        $.each(headings , function(i, val) { 
            tableRowData[i]=[]; 
        });

        $('#testTable tr').not(':first').each(function(){

            i=0;
            $(this).find('td').each(function(){

                tdText=$(this).text();

                tableRowData[i].push(tdText);
                i++;
            });

        });         

        console.log(headings);
        console.log(tableRowData);

        $.ajax({
            url: 'test.php',
            type: 'get',
            async: false,               
            data: {headings:headings,tableRowData:tableRowData,},
            success: function(response_msg){                        

                //Success                                       
            },
            error:function(){

                alert('Failure, some problem');

            }
        });

    });

</script>
        </body>


</html>