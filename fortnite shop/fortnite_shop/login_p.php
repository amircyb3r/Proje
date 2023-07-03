<?php
if(! $_POST['phone']){
header("Location: login.php");
exit;
}

if(! $_POST['pass']){
    header("Location: login.php");
    exit;
    }


    $phon=$_POST['phone'];
    $pass=$_POST['pass'];
    


    $sql ="SELECT * FROM users WHERE phone='$phon'";
    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result)==1){


$user_from_db=mysqli_fetch_assoc($result);

if(password_verify($pass , $user_from_db['password'])){

$_SESSION['login']=$user_from_db['phone'];










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