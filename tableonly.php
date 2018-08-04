<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Tables with Alternate Background</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Start Date</th>
                <th>Email</th>
            </tr>
        </thead>
                <tfoot>
           <th>Name</th>
                <th>Mobile</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Start Date</th>
                <th>Email</th>
        </tfoot>
        <tbody>
              <?php
              error_reporting(0);
              

include "config.php";

              
              
        $stm = "SELECT COUNT(*) FROM users";
       $res = mysqli_query($conn, $stm);
if (mysqli_num_rows($res) > 0) {
            while($ro = mysqli_fetch_assoc($res)) { 
            $records = $ro['COUNT(*)'];
            
  }} 
  
 
  
  $url = "tableonly.php";
 require "paging.php";
 
  include "pagx.php";
  
  //change 10 to $var to make this dynamic according to selected record set
         $stmt = "SELECT * FROM users ORDER BY surname DESC LIMIT $nu, 10";
       $result = mysqli_query($conn, $stmt);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
    
$now = date("Y-m-d");
$agx = date_diff(date_create($row["birthdate"]), date_create($now));
$ag = $agx->format('%y');


            echo "<tr>";
            
               echo "<td>" . $row["name"]. ' ' . $row["surname"] . "</td>";
               
               echo "<td>" . $row["mobile"] . "</td>"; 
               echo "<td>" . $row["birthdate"] . "</td><td>" . $ag . "</td><td>" . $row["ins_time"] . "</td><td>" . $row["email"] . "</td>"; 
               echo "</tr>";
               

               } } 
               ?>
            
        </tbody>
    </table>
</div>
</body>
</html>  