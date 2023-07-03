<?php

function is_login(){

    if(isset($_SESSION['login'])){
  return true;
    }
    
else{


    return false;
}

}
?>