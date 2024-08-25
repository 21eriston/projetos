<?php include("./assets/php/conectar.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto de extenssão</title>
    <link rel="stylesheet" href="./assets//css//style.css">
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
    <div id="third-boxcads">
        <h3>Agendamento de horarios</h3>
            <form action="" method="post" class="custome-form" id="select">
                <div class="select">
                    <label for="">Cliente</label>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <select class="bd-client" name="cliente" id="cliente">
                        <option value="" selected="selected">Selecione um cliente</option>
                        <?php
                            $query = $conect->query("SELECT usuario_nome FROM usuario ORDER BY usuario_nome ASC");
                            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                        
                            foreach($registros as $option) {
                                ?>
                                        <option value=""><?php echo $option['usuario_nome']?></option> 
                                    <?php
                                }   
                        ?>
                    </select>
                </div>
                <div class="in-date">
                    <label for="">Data:</label>
                    <input type="date" class="date-ag">
                </div>
                <div class="in-time">
                    <label for="">Horario:</label>
                    <input type="time" class="date-time">
                </div>
                <div class="submit">
                    <button type="submit">Enviar</button>
                </div>
                <div class="return">
                    <a href="./index.html"><button type="button">Voltar</button></a>
                </div>
            </form>
                    <table class="tbl-one">
                        <thead class="tbl-head">
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Horario</th>
                            </tr>
                        </thead>
                            <tbody class="tbl-body">
                            <?php
                                $query = $conect->query("SELECT cliente, data, hora FROM agendas ORDER BY cliente, data, hora ASC");
                                $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                            
                                foreach($registros as $option) {
                                    ?>
                                            <tr>
                                                <td><?php echo $option['cliente']?></td>
                                                <td><?php echo $option['data']?></td>
                                                <td><?php echo $option['hora']?></td>
                                            </tr>
                                        <?php
                                    }   
                            ?>
                            </tbody>
                    </table>
            </div>    
    <script src="./assets//js//form.js"></script>            
</body>
</html>