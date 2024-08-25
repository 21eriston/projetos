<?php 
    include("./assets/php/conect.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto de extenssão</title>
    <link rel="stylesheet" href="./assets/css//style.css">
</head>
<body> 
    <body> 
        <section id="box-main">
         <div class="second-box">
             <h1>AGENDA</h1>
             <p>
                 Projeto eleborado para o trabalho de extenssão da faculdade 
                 Estácio curso ADS(Analista e desenvolvimento de sistemas),
                 tema para essa disciplina é banco de dados.
             </p>
             
             <h2>SIGA-NOS</h2>
             <div class="icon-box">
                 <img src="./assets/img/icons8-facebook.svg" alt="icon-facebook" class="img">
                 <img src="./assets/img/icons8-linkedin-circundado.svg" alt="icon-int" class="img">
                 <img src="./assets/img/icons8-círculo-do-instagram.svg" alt="icon-insta" class="img">
                 <img src="./assets/img/icons8-google-plus.svg" alt="icon-g+" class="img">
             </div>
             <footer>© 2024 copyright aluno eriston.</footer>
         </div>
    <div id="third-boxcad">
        <h3>Cadastro de cliente</h3>
        <form action="./assets//php//enviar.php" method="post" class="custome-form">
            <div>
                <Label>Nome:</Label>
                <input type="text" name="usuario_nome" required autofocus>
            </div>
            <div>
                <Label>Edereço:</Label>
                <input type="text" name="usuario_endereco" required> 
            </div>
            <div>
                    <Label>Bairro:</Label>
                    <input type="text" name="usuario_bairro" required> 
            </div>
            <div>
                    <Label>Numero:</Label>
                    <input type="text" name="usuario_numero" required>
            </div>
            <div>
                    <Label>Telefone:</Label>
                    <input type="number" name="usuario_telefone" required>
            </div> 
            <div class="submit">
                <button type="submit" name="submit">Enviar</button>
            </div>  
            <div class="return">
                <a href="./index.html"><button type="button" name="btn-return">Voltar</button></a>
            </div> 
        </form>
    </div>
</body>
</html>


