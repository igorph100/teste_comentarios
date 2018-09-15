<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastre-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="cadastrar.php">
            Nome: <input type="text" name="nome"><br>
            Login: <input type="text" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            Sexo: <select name="sexo">
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
            </select><br>
            Email: <input type="email" name="email"><br>
            <input type="submit" value="Cadastrar">
        </form>

    </body>
</html>