<?php

include_once 'conexao.php';


$email = $_POST['email'];
$sql_rec = "select * from u where email = '$email'";
$query_rec = $conn->query($sql_rec);

if ($query_rec->rowCount() > 0) {
    $recuperar = $query_rec->fetchAll(PDO::FETCH_ASSOC);
    $senha = $recuperar[0]['senha'];


    $destinatario = $email;
    $assunto = 'Recuperar senha !';
    $corpo = "Sua senha é: $senha";



    if (mail("$destinatario", $assunto, $corpo, 'From: PosAula@mail.com')) {
        echo "<script>alert('Sua senha foi enviada para $destinatario');</script>";
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://testeemail2468.000webhostapp.com/'>";
    } else {
        echo 'Erro ao enviar email';
    }
} else {
    echo 'Esse email não está cadastrado';
}
