 <html>
<body>

 <?php
    include_once("dbconnection.php");
    $username=$_REQUEST['username'];
    $userpass=$_REQUEST['password'];
    $q="select * from users where username='".$username."'";
    $exe=mysqli_query($bd,$q);
    $a=mysqli_fetch_array($exe);
    if($a['username']==$username && convert_uudecode($a['password'])==$userpass)
    {
    session_start();
    $_SESSION['s']=$username;
    echo '<script language="javascript">';
    echo 'window.location.href="index.php";';
    echo '</script>';  
    }
    else 
    {
    echo '<script language="javascript">';
    echo 'alert("Invalid username / password.");';
    echo 'window.location.href="login.php";';
    echo '</script>';  

    }
    
    ?>