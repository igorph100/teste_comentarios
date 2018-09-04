<?php
include_once 'conexao.php';
//nome
//url_imagem
//data
//comentario
session_start();

$nome = $_SESSION['nome_usuario'];
$url_imagem = $_SESSION['url_imagem'];
$data = 'NOW()';
$comentario = $_GET['comentario'];
$id_grupo = $_GET['cod_materia'];

$sql = "insert into comentarios (nome_usuario , url_imagem , data , comentario , id_grupo) values ('$nome' , '$url_imagem' , $data , '$comentario' , '$id_grupo')";
$query = $conn->query($sql);

if($query->rowCount() > 0){
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projetos_novos/teste_comentarios/index.php'>";
}
//$query = $conn->query($sql);
//$return = $query->fetchAll(PDO::FETCH_ASSOC);

//echo $return[0]['url_imagem'];