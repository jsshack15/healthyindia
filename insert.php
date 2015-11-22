<html>
<body>
<?php

$database="weavers"; //database name
$user_name=$_POST['name'];//this values comes from html file after submitting
$user_id=$_POST['email'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO student (name,email)VALUES ('$user_name','$user_id')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>";



mysql_close($con);


?>
<\body>
<\html>