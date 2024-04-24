<?php
require_once("conecta_bd.php");

function checaUsuario($email, $senha) {
    $conexao = conecta_bd();
    $senhaMd5 = md5($senha);
    $query = "select * from usuario where email = '$email' and senha = '$senhaMd5'";


    $resultado = mysqli_query($conexao,$query);
    $dados = mysqli_fetch_array($resultado);
    return $dados;
    
}


?>