<?php


class UserClass {
  
    public function addUser($firstname, $lastname, $email, $phone, $password){
        include "../config/database.php";
        //Hashage de password 
        $passwordHash = $this->hashPassword($_POST['password']);
        
        //toute ta requète sql vers ta bdd
        try {
            $query = $pdo->prepare(
            "INSERT INTO user (firstname, lastname, email, password, phone, role)
            VALUES (?, ?, ?, ?, ?, 'user')");
        
        //on éxécute la requète
        $query->execute( [ $firstname, $lastname, $email, $passwordHash, $phone ] );
        var_dump("It's ok!");
        } catch(Exception $e){
            die("Oh noes! There's an error in the query!");
        }
       // redirection vers la page d'accueil
        header('Location: index.php');
        exit();
    }
    
    public function showUsers(){
        //toute ta requète sql vers ta bdd
    }
    
    public function showOneUser(){
        //toute ta requète sql vers ta bdd
    }
    public function modifyUser(){
        //toute ta requète sql vers ta bdd
    }
    
    public function deleteUser($firstname, $lastname, $email, $phone, $password){
        //toute ta requète sql vers ta bdd
        include "../config/database.php";
        $query = $pdo->prepare(
		"DELETE 
		 FROM
		 	user (firstname, lastname, email, password, phone, role)
	     WHERE
	        Id = (?, ?, ?, ?, ?, 'user')"
		);
		 $query->execute( [ $firstname, $lastname, $email, $passwordHash, $phone ] );
		 
		   header('Location: index.php');
        exit();
    }
    
    
    private function hashPassword($password)
    {

        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }
    
    private function verifyPassword($password, $hashPassword)
    {
        return crypt ($password, $hashPassword) ==$hasdPassword;
    }
}

?>