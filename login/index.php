<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="fundo">
    <div class="container mt-5 ">




    <form action="login.php" method="POST">
    <h1>Login</h1>

        <label for="">
            Usuário: <br>
            <input type="text" name="username" placeholder="Informe seu nome" class="form-control">
        </label><br><br>
        <label for="">
            Password: <br>
            <input type="text" name="password" placeholder="Informe sua senha" class="form-control">
        </label><br><br>
        <input type="submit" value="Enviar" class="btn btn-primary">

        <a  id="cadastrar" href="cadastrar_login.php">Não tem uma conta? Cadastre-se</a>
    </form>

 
    </div>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>





