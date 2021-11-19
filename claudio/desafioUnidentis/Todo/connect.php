<?php

$conn = new mysqli('localhost', 'root', '', 'desafio');

if($conn){
    // echo 'conectado';
}else{
    die(mysqli_error($conn));
}