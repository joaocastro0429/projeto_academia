<?php


if(!$username && !$password){

   require "config.php";
   $username=filter_input(INPUT_POST,'username');
   $password=filter_input(INPUT_POST,'password');


   $sql=$con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if($sql->rowCount()>0){
       print_r($sql);

       header("Location:pagina_login.php");

    }else{
      echo "<h1>Usuário Inválido!</h1>";

    }
    
  
   //  print_r($username);
   //  echo "<br>";
   //  print_r($password);

  

   }




?>









   


 



