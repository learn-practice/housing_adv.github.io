<?php
$name=strtolower($_POST['name']);
$address=strtolower($_POST['address']);
$city=strtolower($_POST['city']);
$price=$_POST['price'];
$area=$_POST['size'];
$img=$_FILES['img'];
$category=$_POST['category'];
$status=$_POST['status'];
$description=strtolower($_POST['description']);
$mob=$_POST['contact'];
$email=$_POST['email'];
if($category==null || $category=="")
{
    $category='flat';
}
if($status=="" || $status==null)
{
    $status="on sale";
}
$con=mysql_connect("localhost","root","");
if($con==false)
{
    die("error in connection");
}
mysql_query("use agent");
if(isset($_POST['submit']))
{
    $filename=$img['name'];
    $fileerror=$img['error'];
    $filetemp=$img['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored))
    {
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetemp,$destinationfile);
        // $image=addslashes(file_get_contents($_FILES['img']['tmp_name']));
        $res=mysql_query("insert into agent.registration values('$name','$address','$city','$price','$area','$destinationfile','$category','$status','$description','$mob','$email')");
        if($res==true)
            {
                echo("<script type='text/javascript'>alert('registration successful.');window.location.href='index.php'</script>");
            }
        else
            {
                echo("<script type=text/javascript>alert('There Is Some Problem In Registration ,Please Try Again');window.location.href='registration.html'</script>");
            }
    }  
}
mysql_close($con);
?>