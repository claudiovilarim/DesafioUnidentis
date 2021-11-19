<?php

include './connect.php';

if(isset($_GET['deletaid'])){
    $id=$_GET['deletaid'];

    $sql = "delete from `tarefas` where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "Deletado";
        header('location:exibe.php');
    }else{
        die(mysqli_error($conn));
    }
}