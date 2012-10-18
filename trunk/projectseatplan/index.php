<?php
session_start();

//$_SESSION['login'] =1 ;
//unset($_SESSION['login']);

include_once('template/header.php');

if(!isset($_SESSION['login'])){
    include_once('include/loginForm.php');
}

else{
    include_once('include/admin/Admin.php');
}

include_once('template/footer.php');

?>