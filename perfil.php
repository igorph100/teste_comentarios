<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'conexao.php';
include_once 'menu.html';
session_start();
$id_usuario = $_SESSION['id_usuario'];
$sql_perfil = "select * from u where id_usuario = '$id_usuario'";
$query_perfil = $conn->query($sql_perfil);
$perfil = $query_perfil->fetchAll(PDO::FETCH_ASSOC);

$nome = $perfil[0]['nome'];
$img = $perfil[0]['url_imagem'];
echo "<center>
        <div id='info'>
            <img src='$img'><br>
            <span>Nome: $nome</span><br>
            <span>Email: $nome@mail.com</span><br>
            <span>Cidade: Barueri</span>
        </div></center>";

