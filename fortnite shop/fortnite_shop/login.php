
<?php
require_once 'header.php' ;


if(is_login()){

    header("Location: profile.php");
   exit;
   
     }

 ?>

<!---------------------------------------------------------------------------------------------------------->




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="yourprofile.php" method="POST" class="login" >
            
    <div id="sff">فرم ورود</div>

    <label><div class="sf" >شماره تلفن</div></label>
    
    <input type="text" name="phone" required placeholder="09"  >
    
    <label><div class="sf" >رمز عبور</div></label>
    
    <input type="password" required name="pass"  >

    <input type="submit" value="ورود">

    <?php

if(isset($_SESSION['error'])){

?>
<span class="error">
<?=$_SESSION['error'] ?>
</span>

<?php
unset($_SESSION['error']);
}
?>


</form>




<!---------------------------------------------------------------------------------------------------------->

<?php
require_once 'footer.php' ;
?>
