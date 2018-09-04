<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Todos os grupos
include_once 'conexao.php';
session_start();

include_once 'menu.html';

echo "<h2>Todos os grupos</h2>";
$sql_grupos = "SELECT * from grupos";

//$sql2 = "SELECT nome_grupo FROM usuario_grupo INNER JOIN grupos ON usuario_grupo.id_grupo = grupos.id_grupo";

$query_grupos = $conn->query($sql_grupos);

$todos_grupos = $query_grupos->fetchAll(PDO::FETCH_ASSOC);

$j = 0;
while ($j < $query_grupos->rowCount()) {
    $id_entrar_grupo = $todos_grupos[$j]['id_grupo'];
    echo $todos_grupos[$j]['nome_grupo'] . ' ' . "<a href = 'entrar_grupo.php?id_grupo=$id_entrar_grupo'>Entrar</a>" . '<br>';
    $j++;
}
