<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm-password'];

$name=$_SESSION['name'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
$birth_date=$_SESSION['birth_date'];
$phone_number=$_SESSION['phone_no'];

$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use agent");
$res=mysql_query("insert into agent.signup values('$email','$username','$password','$name','$address','$birth_date','$phone_number')");
if($res==TRUE)
{
   echo("<script> document.alert('singup successfuly')</script>");
}
else{
   echo("<script>document.alert('there is a problem with signup')</script>");
}
mysql_close($con);
header('location:index.php');
?>