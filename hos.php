<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
//}

$query= "SELECT city,category FROM nearest";
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

     // output data of each row
     while ($row = mysql_fetch_object($result)){
         echo $row->city;}
		 //echo "city: ".$row{'city'}."user_id:".$row{'category'}. ""<br>";
  $conn->close();
?> 

</body>
</html>