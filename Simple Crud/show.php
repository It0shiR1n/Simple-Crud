<?php 

    include("connect.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Edit</title>
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Index</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Inserir</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="show.php">Exibir Registros</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Alterar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="remove.php">Remover</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

        <div class="container">
            <form method="POST" action="ed.php">
                <div class="mb-3 ">
                    <label for="exampleInputPassword1" class="form-label">ID</label>
                    <input type="text" class="form-control" name="IDusuario">
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">RG</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <!--<th scope="col">Password</th>-->
                        </tr>
                    </thead>

                    
                    <?php
                        $query = $pdo->prepare("SELECT * FROM simple");
                        $query->execute();

                        $data = $query->fetchAll();

                        foreach($data as $value){
                            $id = $value["idContato"];
                            $name = $value["name"];
                            $rg = $value["RG"];
                            $tel = $value["telephone"];
                            $email = $value["email"];
                            
                    ?>


                        <tbody>
                            <tr>
                            <form method="POST" action="ed.php">
                                <th scope="row"><?php echo($id);?></th>
                                    <td><?php echo($name);?></td>
                                    <td><?php echo($rg);?></td>
                                    <td><?php echo($tel);?></td>
                                    <td><?php echo($email);?></td>
                                    
                                </tr>
                            </form>
                        </tbody>

                    <?php
                        
                        }
                        
                    ?>
                </table>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>