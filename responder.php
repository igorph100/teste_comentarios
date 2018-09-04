<?php
include_once 'conexao.php';
session_start();/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id_comentario = $_GET['valor'];
$resposta = $_GET['resposta'];
//echo $valor;


$nome = $_SESSION['nome_usuario'];
$url_imagem = $_SESSION['url_imagem'];
$data = 'NOW()';
$comentario = $_GET['resposta'];

$sql = "insert into respostas (nome_usuario , url_imagem , data , resposta , id_comentario) values ('$nome' , '$url_imagem' , $data , '$resposta' , '$id_comentario')";
$query = $conn->query($sql);

if($query->rowCount() > 0){
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projetos_novos/teste_comentarios/index.php'>";
}
//$query = $conn->query($sql);
//$return = $query->fetchAll(PDO::FETCH_ASSOC);

//echo $return[0]['url_imagem'];