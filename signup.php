<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<form action="sign_to.php" method="post" name="myform" onsubmit="return validation()">
        <div class="sign-page">
        <h1> sign up</h1>
            <div class="signup">
                <div class="username">
                    <label for="username">Username </label><br><br>
                    <input type="text" name="username" id="username" placeholder="Username" autofocus><br><br>
                </div>
                <div class="password">
                    <label for="password">Password </label><br><br>
                    <input type="password" name="password" id="password" >
                </div>
                <div class="confirm-password">
                    <label for="confirm-password">Confirm Password </label><br><br>
                    <input type="password" name="confirm-password" id="confirm-password" >
                </div>
            </div>
                <div class="button">
                <input type="submit" value="sign up">
               </div>
        </div>
        </form>
        <script type="text/javascript">
    function validation()
      {
       var username=document.forms["myform"]["username"].value;
       var password=document.forms["myform"]["password"].value;
       var confirmPassword=document.forms["myform"]["confirm-password"].value;
       if(username =="")
         {
           alert("please enter your username frist.");
            //form_val.username.focus();
            return false;
         }
      if(username.length<10)
        {
         alert("username must be at least of 6 characters.");
        //   form_val.username.focus();
            return false;
        }
     if(password =="")
       {
           alert("please enter your password.");
            // form_val.password.focus();
            return false;
         }
      if(password.length<6)
        {
         alert("password must be at least of 6 characters.");
        //   form_val.password.focus();
            return false;
        }
        if(password!=confirmPassword)
        {
            alert("Password Does Not Match")
        }
       return true
     }
  </script>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email-address'];
$address=$_POST['address'];
$birth_date=$_POST['birth-date'];
$phone_no=$_POST['phone-no'];

$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['address']=$address;
$_SESSION['birth_date']=$birth_date;
$_SESSION['phone_no']=$phone_no;
}
?>
