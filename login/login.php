<?php


if(!$name&& !$senha){

   require "config.php";
   $name=filter_input(INPUT_POST,'name');
   $senha=filter_input(INPUT_POST,'senha');


   $sql=$con->query("SELECT * FROM users WHERE username='$name' AND password='$senha'");
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









   


 



