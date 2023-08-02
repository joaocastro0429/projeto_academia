<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container">
        <h1>Adcionar alunos</h1>

        <form method="POST" action="adcionar_action.php">
            <label>
                Nome do Aluno: <br>
                <input type="text" name="name" class="form-control">
            </label><br><br>

            <label>
                Numero da Matricula: <br>
                <input type="number" name="matricula" class="form-control" width="100%"><br><br>
                <button type="button" class="btn btn-success">Cadastrar</button>

            </label>


        </form>

    </div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>