<?php

require "./config.php";
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$matricula = filter_input(INPUT_POST, 'matricula');


if ($id && $name && $matricula) {
    $sql = $pdo->prepare("UPDATE users SET name=:name , matricula=:matricula  WHERE id=:id");

    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':matricula', $matricula);
    $sql->execute();


    header("Location:cadastrar.php");
    exit;
} else {
    header("Location:adicionar.php");
    exit;
}
