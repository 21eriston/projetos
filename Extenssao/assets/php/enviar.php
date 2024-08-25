<?php
    include("./conect.php");

        $nome =  $_POST['usuario_nome'];
        $endereco =  $_POST['usuario_endereco'];
        $bairro =  $_POST['usuario_bairro'];
        $numero =  $_POST['usuario_numero'];
        $telefone =  $_POST['usuario_telefone'];

        $sql = ("INSERT INTO usuario(usuario_nome, usuario_endereco, usuario_bairro, usuario_numero, usuario_telefone) values('$nome','$endereco','$bairro','$numero','$telefone')");
    
        $result = pg_query($connect, $sql);

        header('Location: http://localhost/trabalho%20de%20extenss%C3%A3o/cadefetuado.html');
    ?>
