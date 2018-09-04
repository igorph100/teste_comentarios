<?php

include_once 'conexao.php';

$id = $_GET['id_grupo'];
$sql_sair_grupo = "DELETE FROM `usuario_grupo` WHERE `usuario_grupo`.`id_usuario_grupo` = '$id'";
//echo $id;
$query_sair_grupo = $conn->query($sql_sair_grupo);
//$usuario = $query_login->fetchAll(PDO::FETCH_ASSOC);

if($query_sair_grupo->rowCount() > 0){
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projetos_novos/teste_comentarios/grupos.php'>";
}