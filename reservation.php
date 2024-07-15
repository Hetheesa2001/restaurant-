<?php
include("config.php");


$name = $_POST['name'];
$email = $_POST['email'];
$mobilenumber = $_POST['contact-number'];
$date = $_POST['date'];
$time = $_POST['time'];
$howmanypeople = $_POST['guests'];
$request = $_POST['special-requests'];


$result=@mysql_query("INSERT INTO reservation(rname,remail,rcontact,rdate,rtime,noofguest,specialrequest)values('$name','$email','$mobilenumber','$date','$time','$howmanypeople','$request')");

if(!$result){
die(mysql_error());
}
header("Location: Home.html");
?>