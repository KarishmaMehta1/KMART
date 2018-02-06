<div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <!--<span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />-->
          <?php
        session_start();
        if((isset($_SESSION['s'])==""))
        {
        ?>
            <a href="login.php"><button name="button_login" class="userbtn" type="button" value"LOGIN">LOGIN</button></a>
            <a href="signup.php"><button name="button_signup" type="button" class="userbtn" value"SIGN UP">SIGN UP</button></a>
        <?php
        }
        else
        {
             include_once("dbconnection.php");
             $sname = $_SESSION['s'];
             $res = mysqli_fetch_array(mysqli_query($bd,"SELECT name FROM users WHERE username='$sname'"));
             $esell = mysqli_fetch_array(mysqli_query($bd,"SELECT sell FROM users WHERE username='$sname'"));
             $name = array_values($res)[0];
             $sell = array_values($esell)[0];
             if($sell==1){
        ?>
                 
                 <button type="button" class="userbtn" value"<?php echo $name ?> &rsquo;s Seller Portal"><?php echo $name ?> &rsquo;s Seller Portal</button></a>
             <?php }else{?>
                 <button type="button" class="userbtn" value"Hello! <?php echo $name ?>">Hello! <?php echo $name ?></button></a>
                 <?php } ?>
                 <a href="logout.php"><button name="button_logout" class="userbtn" type="button" value"LOGOUT">LOGOUT</button></a>
         <?php
        }
?>
         
        </form>
</div>
<div class="logo">
    <h1><a href="index.php"><span>k</span>Mart</a></h1>
</div>