<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <header>
        <nav>
            <h1>Agent</h1>
            <ol>
                <li class="space"><a href="login.html">Registration</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                
            </ol>
        </nav>
    </header>
   
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
    die("error in connection");
}
mysql_query("use agent");

$res=mysql_query("select *from agent.registration");
while($row=mysql_fetch_array($res))
{
?>  
    <div class="wraper">
        <div class="bigbox">
            <div class="box">
        
                <ol>
                    <li><img src="<?php echo($row[5]);?>" alt="image not found" height="200px" width="350px"> 
                    </li>
        
                   <li>size : <?php echo("$row[4]");?></li>
    
       
                    <li>address : <?php echo("$row[1]");?>, <?php echo("$row[2]");?></li>
                    <li id="price">price : <?php echo("$row[3]");?></li>

                    <li>category:<?php echo("$row[6]");?></li>
       
                    <li>discription:<?php echo("$row[8]");?></li>
                    <h4>contact Information</h4>
                    <li>name of the owner: <?php echo("$row[0]");?></li>
                    <li>contact:<?php echo("$row[9]");?></li>
                    <li>email:<?php echo("$row[10]");?></li>
                    <li class="btn"><?php echo("$row[7]");?></li>
                </ol>
            </div>
        </div>
    </div>
<?php
}


?>