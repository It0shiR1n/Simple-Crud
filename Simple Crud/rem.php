<?php
    include("connect.php");
                
    try{
        
        $id = $_POST["id"];
        $password = md5($_POST["password"]);


        if($id == null){
            echo("Por favor preencha o campo ID...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }else if($password == null){
            echo("Por favor preencha o campo Password...");
            echo("<br>");
            echo("<a href='insert.php'>Voltar para a página de insert</a>");
            exit;

        }

        $sql = $pdo->prepare("SELECT * FROM simple WHERE idContato = $id, password = $password");
        $sql->execute();
        $check = $sql->rowCount();

                
        if($check == 1){
            $insert = $pdo->prepare("DELETE FROM simple WHERE idContato = $id");
                    
            if($insert->execute(array($id))){
                echo("Inserido com sucesso !!");
                echo("<br>");
                echo("<a href='remove.php'>Retornar para a insert...</a>");

            }else {
                echo("Falha ao inserir !!");
                echo("<br>");
                echo("<a href='remove.php'>Retornar para a insert...</a>");

            }

        }

    }catch(Exception $erro){
        echo("Ocorreu um erro !!");
        echo($erro);

    }

         
            
?>
