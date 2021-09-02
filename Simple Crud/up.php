<?php

    include("connect.php");


    try{

        $id = $_POST["id"];
        $name = $_POST["name"];
        $rg = $_POST["RG"];
        $tel = $_POST["Telephone"];
        $email = $_POST["Email"];
        

        if($name == null){
            echo("Por favor preencha o campo nome...");
            echo("<br>");
            echo("<a href='update.php'>Voltar para a página de Update</a>");
            exit;

        }else if($rg == null){
            echo("Por favor preencha o campo RG...");
            echo("<br>");
            echo("<a href='update.php'>Voltar para a página de Update</a>");
            exit;

        }else if($tel == null){
            echo("Por favor preencha o campo Telefone...");
            echo("<br>");
            echo("<a href='update.php'>Voltar para a página de Update</a>");
            exit;

        }else if($email == null){
            echo("Por favor preencha o campo Email...");
            echo("<br>");
            echo("<a href='update.php'>Voltar para a página de Update</a>");
            exit;

        }

        $update = $pdo->prepare("update simple set name = ?, RG = ?, telephone = ?, email = ? where idContato = ?");
    
        if($update->execute(array($name, $rg, $tel, $email, $id))){
            echo("Registro atualizado com sucesso !");
            echo("<br>");
            echo("<a href='update.php'>Retornar para a Update</a>");

        }else {
            echo("Não foi possível atualizar o registro !");
            echo("<br>");
            echo("<a href='update.php'>Retornar para a Update</a>");

        }

        
    }catch (Exception $err){
        echo("Ocorreu um erro");
        echo($err);

    }


    



?>