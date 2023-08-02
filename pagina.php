<?php

  require "./config.php";

  $total=0;
  $sql=$pdo->query("SELECT COUNT(*) as c FROM  users");
  $sql=$sql->fetch();
  $total=$sql['c'];
  $pagina=$total/10;

  
  
  $p=0;
  $pg=1;
  if(isset($_GET['p'])&& !empty($_GET['p'])){
    $pg=addslashes($_GET['p']);
  }
  $p=($pg-1)*10;
  $sql=$pdo->query("SELECT * FROM users limit $p, 10");

  if($sql->rowCount()>0){
    foreach($sql->fetchAll() as $list){
      
    }

    echo "<hr>";

   for($q=0;$q<$pagina;$q++){
    echo  '<a href="?p='.($q+1).'"> ['.($q+1).']</a>';
   }

  }

 ?>