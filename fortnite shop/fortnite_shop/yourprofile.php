
<?php
require_once 'header.php' ;

 
    
 if(is_login()){

 header("Location: profile.php");
exit;

  }
  
    

?>
<?php
if(! $_POST['phone']){
header("Location: login.php");
exit;
}

if(! $_POST['pass']){
    header("Location: login.php");
    exit;
    }
?>


            <?= $phonema=$_POST['phone'] ?>


            <<?= $passma=$_POST['pass'] ?>
            
       
<?php
$_SESSION['phone']=$phonema;
$_SESSION['ali']=$passma;


            $sql ="SELECT * FROM users WHERE phone='$phonema'";
            $result = mysqli_query($link,$sql);

            if(mysqli_num_rows($result)==1){


$user_from_db=mysqli_fetch_assoc($result);

if(password_verify($passma , $user_from_db['password'])){

$_SESSION['login']=$user_from_db['phone'];

header("Location: profile.php");


    







}
else{
    $_SESSION['error']='کلمه عبور وارد شده نامعتبر است ';
    header("Location: login.php");
    exit;


}



}








else{

    $_SESSION['error']='پوزش کاربر یافت نشد ';
    header("Location: login.php");
    exit;

}

?>
