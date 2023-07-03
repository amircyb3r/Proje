
<?php
require_once 'header.php' ;

 
if(!is_login()){

    header("Location: home.php");
   exit;
   
     }
    
   
?>




        <div class="mainn">

            
            


            <br>
            <br>
            <br>
<div class="profile">
    

<?php
// $num=2;
// $sql="SELECT * FROM users";
// $result=mysqli_query($link,$sql);
// $row=mysqli_fetch_assoc($result);
// $p=$row['phone'];
// $e=$row['email'];

$ps=$_SESSION['ali'];
$p=$_SESSION['phone'];

?>

    <form class="details">

        <div>
            <label> <div id="sff">شماره تلفن</div></label>
            
            <input type="text" placeholder="09" name="" id="" value="<?=  $p?>">

            <label><div id="sff" >ایمیل</div></label>

            <input type="text" placeholder="example@example.com" name="" id=""  value="" >

            
            <label><div id="sff">نام کاربری حساب اپیک گیمز شما</div></label>
            
            <input type="text" name="" id="">


        </div>

        <div>
            
            <label></label><div id="sff">پسورداکانت شما</div></label>

            <input type="text" name="" id="" value="<?=  $ps ?>">
            <label></label><div id="sff">دارای تایید دو مرحله ای</div></label>
           
            <input type="checkbox" name="" id="">
        </div>
            
       
        
    </form>

    

        
     



 
</div>

<div class="bot">  
    <input type="submit" value="بروزرسانی">
    <span id="space">         </span>
    <a href="home.php" class="btn-logout">خروج</a>
</div>  
    


    

 <!-- ************************************************************************************** -->
 <?php
require_once 'footer.php' ;
?>