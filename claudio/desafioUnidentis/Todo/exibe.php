<?php
require './connect.php';

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

    <div class="text-center m-3">
        <h2>Todo List</h2>
    </div>

    <div class="container card  mt-3">

        <button class="btn btn-primary m-4">
            <a href="./pessoa.php" class="text-light">Adicionar</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Atividade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
    
                <?php
                $sql = "SELECT * FROM `tarefas`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $nome = $row['pessoa'];
                        $tarefa = $row['texto'];
                        echo ' <tr>
                            <th scope="row">' . $id  .'</th>
                            <td>' . $nome . '</td>
                            <td>' . $tarefa . '</td>
                            <td>
                                <button class="btn btn-primary"> <a href="atualiza.php?atualizaid='.$id.'" class="text-light"> Atualizar </a></button>
                                <button class="btn btn-danger"> <a href="deleta.php?deletaid='.$id.'" class="text-light"> Deletar </a></button>
                            </td>
                        </tr> ';
                    } 
                } 
                ?>
                         
    
            </tbody>
        </table>
    </div>


</body>

</html>