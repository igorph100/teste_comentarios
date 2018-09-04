
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'conexao.php';
include_once 'menu.html';
?>
<html>
    <head>
        <title>Sistema de Comentário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method='get' action='comentar.php'>
            Faça seu comentário sobre matemática:<br><textarea name="comentario" required></textarea>
            <input type="hidden" name="cod_materia" value="1">
            <input type='submit' value='Comentar'>
        </form>
        <?php
        include_once 'listar_matematica.php';
        
        ?>
        
    </body>
</html>
