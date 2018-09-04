<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$variavel = array();
$variavel[1]['cod'] = '1';
$variavel[1]['nome'] = 'igor';
$variavel[1]['arquivo'] = 'listar_matematica.php';
//
$variavel[2]['cod'] = '2';
$variavel[2]['nome'] = 'igor';
$variavel[2]['arquivo'] = 'listar_portugues.php';
//
$variavel[3]['cod'] = '3';
$variavel[3]['nome'] = 'negao';
$variavel[3]['arquivo'] = 'listar_biologia.php';

/*$k = 0;
$count = count($variavel);

$needle = 'igor';
//$var = 2;
//var_dump(array_search($needle, $variavel[0]));

while ($k < $count){
    if(array_search($needle, $variavel[$k]) != FALSE){
        $arquivo = $variavel[$k]['arquivo'];
        include "$arquivo";
        echo'<br>';
    }$k++;
}*/


include_once 'conexao.php';

session_start();
$id_usuario = $_SESSION['id_usuario'];
$sql_grupo = "SELECT * FROM usuario_grupo where id_usuario='$id_usuario'";

//$sql2 = "SELECT nome_grupo FROM usuario_grupo INNER JOIN grupos ON usuario_grupo.id_grupo = grupos.id_grupo";

$query_grupo = $conn->query($sql_grupo);

$grupo = $query_grupo->fetchAll(PDO::FETCH_ASSOC);

//echo $query_grupo->rowCount();

$a = 0;
$num = $id_usuario;
while ($a < $query_grupo->rowCount()){
    if(array_search($num, $grupo[$a]) != FALSE){
        $codgru = $grupo[$a]['id_grupo'];
        $arquivo = $variavel[$codgru]['arquivo'];
        include "$arquivo";
        echo'<br>';
    }$a++;
}