

<?php
require_once 'header.php' ;


 if(is_login()){

    header("Location: login.php");
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

            <form class="register" action="sabtnam_p.php" method="POST" >
            
                <div id="sff">فرم ثبت نام در سایت فورتنایت شاپ</div>

<?php
if(isset($_SESSION['error'])){

foreach($_SESSION['error'] as $error){

echo"<span class='redm'>$error</span>";
}


unset($_SESSION['error']);

}
?>

                <label><div class="sf" >شماره تلفن</div></label>
             
                <input type="text"  placeholder="09" name="phon"  required>
             
                <label><div class="sf"  >رمز عبور</div></label>
                
                <input type="password" name="pas" required>

                <label><div class="sf"  >ایمیل</div></label>
                
                <input type="email" placeholder="example@exaple.com                اختیاری" name="mail" >

                
                
                

                <input type="submit" value="ثبت نام">
            
            </form>

<!---------------------------------------------------------------------------------------------------------->
<?php
require_once 'footer.php' ;
?>

         