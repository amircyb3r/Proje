<?php

require_once './config/boot.php';


?>


<!DOCTYPE html>
<html  lang="fa">

<head>
    <meta charset="UTF-8">
    <title>فورتنایت شاپ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="site">

        <div class="header">


            <a href="home.php"><h1 class="logo">فورتنایت شاپ </h1></a>
            <a href="home.php"> <div id="mylogo"><img  src="./images/wwlogo.png" alt="logo" width="165ox" height="100px" ></div></a>

            <ul class="menu">

                <div class="jojo">
                <li>
                    <a href="./home.php">
                        <span class="material-icons"><span class="text">فروشگاه</span></span>
                        
                    </a>
                </li>
            </div>
            <div class="jojo">
                <li>
                    <a href="akhbar.php">
                        <span class="material-icons"><span class="text"> اخبار بازی</span></span>
                       
                    </a>
                </li>
            </div>
                
                <div class="jojo">
                <li>
                    <a href="about.php">
                        <span class="material-icons"><span class="text"> درباره ما</span></span>
                       
                    </a>
                </li>
            </div>
            <?php if(is_login()){ ?>
                <div class="jojo">
                <li>
                    <a href="yourprofile.php">
                        <span class="material-icons"><span class="text">پروفایل</span></span>
                        
                    </a>
                </li>
            </div>

            <div class="jojo">
                <li>
                    <a href="./logout.php">
                        <span class="material-icons"><span class="text">خروج</span></span>
                        
                    </a>
                </li>
            </div>

            <?php }else {  ?>
                <div class="jojo">
                <li>
                    <a href="login.php">
                        <span class="material-icons"><span class="text"> ورود</span></span>
                       
                    </a>
                </li>
            </div>
                <div class="jojo">
                <li>
                    <a href="sabtnam.php">
                        <span class="material-icons"><span class="text"> ثبت نام</span></span>
                       
                    </a>
                </li>
            </div>
            
            <?php } ?>
            </ul>
        </div>
