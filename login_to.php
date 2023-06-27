
<?php
$username=$_POST['email-add'];
$password=$_POST['login-password'];

$con=mysql_connect("localhost","root","");
if($con==false)
{
    die("error in connection");
}
mysql_query("use agent");
// if($username!="" || $username!=NULL && $password!="" || $password!=NULL)
if(isset($username) && isset($password))
{
    $res=mysql_query("SELECT* FROM agent.signup WHERE username='$username' and password='$password'");
    $row=mysql_fetch_array($res);
    $count=mysql_num_rows($res);
    // echo("$count");
    if($count==0)
    {
        
        header("location:signup.html");
        
    }
    else{
        // echo("<script type='text/javascript'>document.alert('You did not SignIn first SignIn');window.location.href='./signup.html';</script>");
        header("location:./registration.html");
        // echo("<script type='text/javascript>window.location.href='./registration.html'</script>'");
    }
}
else
{
    echo"<script type='text/javascript'>alert('username and password are must');window.location.href='./login.html'</script>";
}

mysql_close($con);
?>