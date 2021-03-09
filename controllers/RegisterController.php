<?php
include "../models/UserClass.php";

   
if(empty($_POST)){

    $template = 'register';
    include '../layout.phtml';
}else{
    //instancie notre class UserClass
    $register = new UserClass();
    $register->addUser($_POST['firstname'],
                        $_POST['lastname'], 
                        $_POST['email'], 
                        $_POST['phone'], 
                        $_POST['password']);

}

?>