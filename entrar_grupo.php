<?php

include_once 'conexao.php';
session_start();
$id_usuario = $_SESSION['id_usuario'];
$id = $_GET['id_grupo'];
$sql_entar_grupo = "insert into usuario_grupo (id_grupo , id_usuario) values ('$id' , '$id_usuario')";
//echo $id;
$query_entar_grupo = $conn->query($sql_entar_grupo);
//$usuario = $query_login->fetchAll(PDO::FETCH_ASSOC);

if($query_entar_grupo->rowCount() > 0){
     echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projetos_novos/teste_comentarios/index.php'>";
}