<html>
<body>
<?php
include_once("dbconnection.php");
$name=$_REQUEST['name'];
$username=$_REQUEST['username'];
$address=$_REQUEST['address'];
$contact=$_REQUEST['contact'];
$p=$_REQUEST['password'];
$password=convert_uuencode($p);
$email=$_REQUEST['email'];
if(isset($_REQUEST['sell'])) {
   $sell=1;
} else {
   $sell=0;
}

$userCheck="select * from users where username='".$username."'";
$exe=mysqli_query($bd,$userCheck);
$arr=mysqli_fetch_array($exe);
if($arr['username']==$username)
{
	 echo '<script language="javascript">';
        echo 'window.location.href="signup.php?a=1";';
    echo '</script>';   
}
else
{
    
$query="INSERT INTO users (username, password, name, address, contact, sell, email) VALUES ('".$username."','".$password."', '".$name."', '".$address."','".$contact."','".$sell."','".$email."')";
$qexe=mysqli_query($bd,$query);
if($qexe==1){
header('location:login.php');
}
else
{
        echo '<script language="javascript">';
        echo 'alert("Unable to create your account. Please contact admin");';
        echo 'window.location.href="signup.php";';
        echo '</script>';   
}  
} 
?>
</body>
</html>
