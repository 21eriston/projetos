<?php   
     $servidor = "localhost";
     $porta = 5432;
     $bancoDeDados = "dbteste";
     $usuario = "postgres";
     $senha = "root";

     $connect = pg_connect("host=localhost dbname=dbteste user=postgres password=root");
        // if(!$connect)
        // {
        // echo "Não foi possivel se conectar ao banco de dados";
        // }
        // else{
        // echo "Conexão com banco de dados efetuada com sucesso";
        // }
?>