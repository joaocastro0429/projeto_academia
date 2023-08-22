<?php

require "./config.php";
$name=filter_input(INPUT_POST,'name');
$password=filter_input(INPUT_POST,'password');


if($name && $password){
    $sql=$pdo->prepare("SELECT FROM * users WHERE name=:name");
    
    if($sql->rowCount()==0){
    $sql=$pdo->prepare("INSERT INTO users(name,password)VALUES (:name,:password)");
    $sql->bindValue(':name',$name);
    $sql->bindValue(':password',$password);

    $sql->execute();

    }

}else{
}
