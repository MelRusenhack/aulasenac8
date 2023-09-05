<?php

$emailCadastrado = "juan@gmail.com";
$senhaCadastrada = "1234";


$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == $emailCadastrado && $senha == $senhaCadastrada){
    echo "Olá, $email ... bem-vindo(a)";
} else {
    header ('Location:login.php');
}

