<?php
    include("connect.php");
                
    try{
        
        $name = $_POST["name"];
        $rg = $_POST["RG"];
        $tel = $_POST["Telephone"];
        $email = $_POST["Email"];
        $password = md5($_POST["password"]);

        if($name == null){
            echo("Por favor preencha o campo nome...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;


        }else if($rg == null){
            echo("Por favor preencha o campo RG...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }else if($tel == null){
            echo("Por favor preencha o campo Telefone...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }else if($email == null){
            echo("Por favor preencha o campo Email...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }else if($password == null){
            echo("Por favor preencha o campo...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }

        $insert = $pdo->prepare("INSERT INTO simple (name, RG, telephone, email, password) VALUES (?, ?, ?, ?, ?)");
                
        if($insert->execute(array($name, $rg, $tel, $email, $password))){
            echo("Inserido com sucesso !!");
            echo("<br>");
            echo("<a href='insert.php'>Retornar para a insert...</a>");

        }else {
            echo("Falha ao inserir !!");

        }


    }catch(Exception $erro){
        echo("Ocorreu um erro !!");
        echo($erro);

    }

    
         
            
?>
