
<?php

$database="sgnup"; //database name
$user_name=$_POST['user1'];
//this values comes from html file after submitting
$pass=$_POST['pass1'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($database, $con);

$result = mysql_query("SELECT username FROM sgnform WHERE username = '$user_name' and password= '$pass'");

$row = mysql_num_rows($result);

if($row==1)
{
    echo '<script type="text/javascript">document.location.href= "contact1.html";</script>';
}
else{
    echo"Sorry, your credentials are not valid, Please try again.";
}


?>
   