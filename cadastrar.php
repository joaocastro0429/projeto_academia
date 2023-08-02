<?php
require "./config.php";
$lista = [];
$sql = $pdo->query("SELECT *FROM  users");
if ($sql->rowCount() > 0) {
   $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Cadastrar</title>
</head>

<body class="background">

   <div class="container">
      <a class="btn btn-primary" href="adcionar.php" role="button">Adcionar Aluno</a>

      <table class="table table-dark" width="100%">

         <tr>
            <th>ID</th>
            <th>NOME DO ALUNO</th>
            <th>MATRICULA</th>
            <th>OBSERVAÇÃO</th>
         </tr>

         <?php
         foreach ($lista as $users) : ?>
            <tr class="table-active">
               <td><?php echo $users['id'] ?></td>
               <td><?php echo  $users['name'] ?></td>
               <td><?php echo $users['matricula'] ?></td>
               <td>
                  <a href="editar.php?id=<?php echo $users['id'] ?>">[editar]</a>
                  <a href="excluir.php?id=<?php echo $users['id'] ?>" onclick="return confirm('tem certeza que deseja excluir?')"> [excluir]</a>

               </td>


            </tr>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


         <?php endforeach; ?>


      </table>

   </div>



</body>

</html>



<?php
require "./pagina.php"
?>