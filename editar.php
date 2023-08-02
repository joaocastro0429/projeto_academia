<?php

require "./config.php";
$informacao = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $pdo->prepare("SELECT * FROM  users WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if ($sql->rowCount() > 0) {
        $informacao = $sql->fetch(PDO::FETCH_ASSOC);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <div class="container">

        <h1>Editar alunos</h1>

        <form method="POST" action="edit_action.php">
            <input type="hidden" name="id" value="<?= $informacao['id']; ?>">
            <label>
                Nome do Aluno: <br>
                <input class="form-control" type="text" name="name" value="<?= $informacao['name']; ?>">
            </label><br><br>

            <label>
                Numero da Matricula: <br>
                <input class="form-control" type="number" name="matricula" value="<?= $informacao['matricula']; ?>"><br><br>
                <button type="submit" class="btn btn-success">Salvar</button>

            </label>


        </form>

    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>