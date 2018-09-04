<?php
$cod = $_GET['id_comentar'];

switch ($cod) {
    case '1':
        header('Location: comentar_matematica.php');

        break;
    case '2':
        header('Location: comentar_portugues.php');

        break;
    case '3':
        header('Location: comentar_biologia.php');

        break;

    default:
        break;
}