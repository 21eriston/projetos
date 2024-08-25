<?php
     $servidor = "localhost";
     $porta = 5432;
     $bancoDeDados = "dbteste";
     $usuario = "postgres";
     $senha = "root";

     try {

        $conect = new PDO("pgsql:host=$servidor;port=5432;dbname=$bancoDeDados", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
            //echo "Conectado no banco de dados!!!";

        }catch (PDOException $e) {
        
            echo "Falaha ao tentar se conectar ao BD. <br/>";
            die($e->getMessage());

     }
?>

