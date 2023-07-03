<?php 

require_once 'config/boot.php';
if(! $_POST['phon']){

    header("Location: sabtnam.php");
   exit;
   
     }




$phon =$_POST['phon'];
$pass =$_POST['pas'];
$email =$_POST['mail'];



$sql="SELECT * FROM users WHERE phone= '$phon'";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1){

$_SESSION['error'][]='کاربری با این نام کاربری وجود دارد';
    //in nam karbari vojod dash
}
$sql="SELECT * FROM users WHERE email= '$email'";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1){

    $_SESSION['error'][]='کاربری با این ایمیل وجود دارد';
    //in email vojod dash
}


if(isset($_SESSION['error'])){

header("Location: sabtnam.php");

}
else{

//hash
$pass =password_hash($pass, PASSWORD_DEFAULT); 


$sql="INSERT INTO users (phone, email, password) VALUES('$phon','$email', '$pass') ";
$result=mysqli_query($link, $sql);

header("Location: login.php");
   exit;
}

?>