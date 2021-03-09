<?php
include "../models/UserClass.php";
include "../layout.phtml";
include 'config/database.php';

if(empty($_POST)){
    $template = 'login';
    include '../layout.phtml';
}else{
    //instancie notre class UserClass
    $register = new UserClass();
    $register->addUser( $_POST['email'], 
                        $_POST['password']);
    
    header("Location: index.php")
    exit();
}


?>