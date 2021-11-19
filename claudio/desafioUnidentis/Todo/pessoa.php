<?php
require './connect.php';

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $tarefa = $_POST['tarefa'];

    $sql = "insert into `tarefas` (pessoa,texto) values('$nome', '$tarefa')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:exibe.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Todo</title>
</head>
<body>

<div class="container">
    <form action="" method="post">
      <div class="mb-3">
    
        <label for="" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="" >
      </div>
    
      <div class="mb-3">
        <label for="" class="form-label">Tarefa</label>
        <input name="tarefa" type="text" class="form-control" id="">
      </div>
      
      <button name="cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

    
</body>
</html>