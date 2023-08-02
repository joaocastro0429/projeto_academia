<?php

require "./config.php";
$name=filter_input(INPUT_POST,'name');
$matricula=filter_input(INPUT_POST,'matricula');


if($name && $matricula){
    $sql=$pdo->prepare("SELECT FROM * users WHERE name=:name");
    
    if($sql->rowCount()==0){
        $sql=$pdo->prepare("INSERT INTO users(name,matricula)VALUES (:name,:matricula)");
    $sql->bindValue(':name',$name);
    $sql->bindValue(':matricula',$matricula);

    $sql->execute();
    header("Location:cadastrar.php");

    }

}else{
    header("Location:edit_action.php");
}

   
