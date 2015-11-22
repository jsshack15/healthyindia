
<?php

$database="sgnup"; //database name
$name=$_POST['n'];//this values comes from html file after submitting
$age=$_POST['a'];
$gender=$_POST['g'];
$email=$_POST['e'];
$username=$_POST['u'];
$pass=$_POST['pwd'];

    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO sgnform (name,age,gender,email,username,password)VALUES ('$name','$age','$gender','$email','$username','$pass')";
 mysql_query($query);

echo "<script type='text/javascript'>";
echo "alert('you are Succesflly registered');";
echo "</script>";



mysql_close($con);


?>
