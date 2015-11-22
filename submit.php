<?php
$name = $_POST['n'];
$age = $_POST['a'];
$gender = $_POST['g'];
$email = $_POST['e'];
$username = $_POST['un'];
$password = $_POST['pwd'];
$dbc = mysqli_connect('localhost','root','','sgnup')
or
die('error connecting to MySql server');
$query = "INSERT INTO sgnform(name,age,gender,email,username,pwd) VALUES('$name','$age','$gender','$email','$username','$password')";
$result = mysqli_query($dbc,$query)
or
die('Error querying to mysql server');
echo'thanks';
mysqli_close($dbc);
?>