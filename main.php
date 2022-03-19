<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "mymovie";  #database name

session_start();
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$query="select * from movies"; 
$result=mysqli_query($conn,$query); 
// $user=$_SESSION['username']
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   
   <body>
   <table class="paleBlueRows" style="margin: 0px auto;">
   <thead>
   <tr>
   <th>Movie Name</th>
   <th>Lead Actor</th>
   <th>Lead Actress</th>
   <th>Release Date</th>
   <th>Director Name</th>
   </tr>
   </thead>
   <?php
   $localhost = "localhost"; #localhost
   $dbusername = "root"; #username of phpmyadmin
   $dbpassword = "";  #password of phpmyadmin
   $dbname = "mymovie";  #database name
    
   #connection string
   $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
   if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
   }
   $sql="SELECT * FROM movies";
   $result=$conn->query($sql);
   if($result-> num_rows > 0)
   {
      while($row=$result->fetch_assoc())
      {
         // while($row=mysql_fetch_array($sql)){
         ?>
         <tr>
            <td><?php echo $row["MovieName"] ?></td>
            <td><?php echo $row["LeadActor"] ?></td>
            <td><?php echo $row["LeadActress"] ?></td>
            <td><?php echo $row["YearOfRelease"] ?></td>
            <td><?php echo $row["Director"] ?></td>
       <?php  
      }
      echo"</table>";
   }
   else{
   echo"0 result";
   }
   $conn->close();
   ?>
   </tr>
   </table>
   
<style>    
   tr:hover {background-color: white;}
   th, td {
    padding: 8px;
    }
</style>
<a href="home.html" style="text-decoration: none"
>HOME</a>
<p id="credits">Done by:Ritika Ghanti</p>
   </body>
</html>

