<?php
include_once 'conexao.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];
if ($sexo === 'm'){
    $url_imagem = 'img/user-m.png';
}else{
    $url_imagem = 'img/user-f.png';
}

$sql_cad = "insert into u (login , senha , nome , url_imagem) values ('$login' , '$senha' , '$nome' , '$url_imagem')";
$query_cad= $conn->query($sql_cad);

if($query_cad->rowCount() > 0){
    echo "
<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projetos_novos/teste_comentarios/login.php'>
    <script type=\"text/javascript\">
        alert('Cadastrado com sucesso !');
    </script>
";
}