<?php  
include("connection.php");
 $sql = "SELECT * FROM (((((studentdetail INNER JOIN academic ON studentdetail.regno = academic.regno)
INNER JOIN paper ON studentdetail.regno = paper.regno)
INNER JOIN project ON studentdetail.regno = project.regno)
INNER JOIN leaderquality ON studentdetail.regno = leaderquality.regno)
INNER JOIN game ON studentdetail.regno = game.regno)";
 $result = mysqli_query($con, $sql); 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Evaluation</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <style>
 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;
  padding-right: 10px;
}
 td {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr{background-color: #f2f2f2;}
 #button{

 width: 100px;
 color: white;
 background-color: #0057ff;
 border: none;
 border-radius: 10px;
 font-size:20px;
 }
    body{
   background-image:url("8c1.jpg");

   background-repeat: no-repeat;
   background-size: 1550px 760px;
   } 
   </style>
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      </head>  
      <body>  
          <form action="logout.php">
          <div class="right-side"><br><button id="button" style = "position:fixed; right:50px;">Logout  <i class='fas fa-sign-out-alt' style='font-size:20px'></i></button></div>
</form>
           <br />  
           <div class="container" style="width:1000px;">  
                <h3 align="center">Student Performance</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Register number</th>  
                               <th>Academic</th> 
                               <th>Paper</th> 
                               <th>Leadership Quality</th>
                               <th>Project</th>
                               <th>Game</th>
                               <th>Total Points</th>
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                          <td><?php echo $row["regno"];?></td> 
                               <td><?php echo $row["point1"];?></td>  
                               <td><?php echo $row["ppt_point"]; ?></td>  
                               <td><?php echo $row["pjt_point"]; ?></td>
                               <td><?php echo $row["lq_point"];  ?></td>
                               <td><?php echo $row["g_point"];  ?></td>
                               <td><?php echo $row["point1"]+$row["ppt_point"]+$row["pjt_point"]+$row["lq_point"]+$row["g_point"]; ?></td>
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  