<h1>Cadastrado com sucesso</h1> 


<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if ($username && $password) {
    $pdo = new PDO("mysql:dbname=login;host=localhost", "root", "");
    $con = $pdo->prepare("SELECT * FROM users");
   
    if ($con->rowCount() == 0) {
        $con = $pdo->prepare("INSERT INTO users(username,password)VALUES (:username,:password) ");

        $con->bindValue(':username', $username);
        $con->bindValue(':password', $password);

        $con->execute();

        echo "<h1>cadastrado com sucesso</h1>";
    } else {
        echo 'hello word';
    }
}
?>
  
