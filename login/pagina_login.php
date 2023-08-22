<?php
require "config.php";
$lista = [];
$sql = $con->query("SELECT *FROM  users");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Página do Usuário</title>
    <link rel="stylesheet" href="login.css">
</head>

<body class="background">
    <div class="container">
    <h2>Bem-vindo à página de login</h2>

    <table>
        <tr>
            <thead>
                <th>Usuario:</th>
            </thead>
            <?php
            foreach ($lista as $users) : ?>
        <tr>
            <td><?php echo  $users['username'] ?></td>

        </tr>


    <?php endforeach; ?>

    </table>

    <a class="cadastro" href="Dashbord.php">Dashbord</a>

    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>