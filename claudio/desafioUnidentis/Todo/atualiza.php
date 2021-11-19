<?php
require './connect.php';

$id=$_GET['atualizaid'];
$sql= "SELECT * FROM `tarefas` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nome = $row['pessoa'];
$tarefa = $row['texto'];

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $tarefa = $_POST['tarefa'];

    $sql = "UPDATE `tarefas` set id=$id,pessoa='$nome',texto='$tarefa' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:exibe.php');
        // echo "atualizado";
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
<body class="bg-info">

<div class="container card mt-3 p-3">
    <form action="" method="post">
      <div class="mb-3">
    
        <label for="" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="" value="<?php echo $nome;?> ">
      </div>
    
      <div class="mb-3">
        <label for="" class="form-label">Tarefa</label>
        <input name="tarefa" type="text" class="form-control" id="" value="<?php echo $tarefa;?> ">
      </div>
      
      <button name="cadastrar" type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

    
</body>
</html>