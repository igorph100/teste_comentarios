<?php
include_once 'conexao.php';
/*$variavel = array();
$variavel[0]['cod'] = '1';
$variavel[0]['nome'] = 'igor';
//
$variavel[1]['cod'] = '2';
$variavel[1]['nome'] = 'negao';
//
$variavel[2]['cod'] = '3';
$variavel[2]['nome'

$grupo = $query_grupo->fetchAll(PDO::FETCH_ASSOC);] = 'negao';

$k = 0;
$count = count($variavel);*/
//

session_start();
//$id_usuario = $_SESSION['id_usuario'];
$sql_grupo = "SELECT * FROM usuario_grupo where id_usuario='8'";

//$sql2 = "SELECT nome_grupo FROM usuario_grupo INNER JOIN grupos ON usuario_grupo.id_grupo = grupos.id_grupo";

$query_grupo = $conn->query($sql_grupo);

$grupo = $query_grupo->fetchAll(PDO::FETCH_ASSOC);

echo $query_grupo->rowCount();
//
$k = 0;
while($k <= $query_grupo->rowCount()){
   // 
   
         $cont = $grupo[$k]['id_grupo'];
        echo '<div>';
        $sql = "select * from comentarios where id_grupo = '$cont' order by id_comentario desc";
        $query = $conn->query($sql);
        $comentarios = $query->fetchAll(PDO::FETCH_ASSOC);
        $i = 0;
        
        while ($i < $query->rowCount()){
            
            echo "<h2>Comentario</h2> <br>";
            $imagem_c = $comentarios[$i]['url_imagem'];
            echo "<img src='$imagem_c' alt='' id='perfil'/>";
            echo $comentarios[$i]['nome_usuario'].' comentou:';
            //echo'<br>';
            //echo $comentarios[$i]['url_imagem'];
            echo'<br>';
            echo $comentarios[$i]['comentario'];
            echo'<br>';
            echo "Na data: ". $comentarios[$i]['data'];
            
            $id = $comentarios[$i]['id_comentario'];
            echo'<br>';
            //Começou as respostas
            
            $sql_resposta = "select * from respostas where id_comentario = '$id' order by id_resposta asc";
            $query_resposta = $conn->query($sql_resposta);
            $respostas = $query_resposta->fetchAll(PDO::FETCH_ASSOC);
            $j = 0;
            while ($j < $query_resposta->rowCount()){
            $imagem_r = $respostas[$j]['url_imagem'];
            echo "<div id='respostas'>";
            echo "<h3>Respostas</h3>";
            echo "<img src='$imagem_r' alt='' id='perfil'/>";
            echo $respostas[$j]['nome_usuario']. ' respondeu o comentário de '.$comentarios[$i]['nome_usuario']. ' com: ';
            //echo'<br>';
           // echo $respostas[$j]['url_imagem'];
            echo'<br>';
            echo $respostas[$j]['resposta'];
            echo'<br>';
            echo 'Na data: '.$respostas[$j]['data'];
            
            echo'<br>';
            echo '<br>';
            $j++;
            echo '</div>';
            }
            
            
            
            //Acabou as respostas
            echo "<form method='get' action='responder.php'>
            Resposta: <input type='text' name='resposta' required>
            <input type='hidden' name='valor'";
            echo " value='$id'>
            <input type='submit' value='Responder'>
        </form>";
            echo '<hr><br>';
            $i++;
        }
        echo '</div>';
        

    
    //
    $k++;
}