<?php
include_once 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql_login = "select * from u where login = '$login' && senha = '$senha' limit 1";
$query_login = $conn->query($sql_login);
//$usuario = $query_login->fetchAll(PDO::FETCH_ASSOC);

if($query_login->rowCount() > 0){
    session_start();
    $usuario = $query_login->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['nome_usuario'] = $usuario[0]['nome'];
    $_SESSION['url_imagem'] = $usuario[0]['url_imagem'];
    $_SESSION['id_usuario'] = $usuario[0]['id_usuario'];
    header('Location: index.php');
}else{
    header('Location: login.php');
}
