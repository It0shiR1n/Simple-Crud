<?php

    try{

        $pdo = new PDO("mysql:host=127.0.0.1;dbname=simpleCrud", "", "");

    }catch(PDOException $erro){
        echo("Failed to connect in database");
        echo($erro);

    }


?>
