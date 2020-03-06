<?php require_once 'autoload.php';  ?>
<?php if(!isset($pesquisa)){$pesquisa = "";}?>

<html>
    <head>
        <title>XP</title>
        <!-- usar bootstrap online -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body class="bg-danger">

        <div class="container">
            <!-- título http://getbootstrap.com/components/#jumbotron -->
            
<!-- Exibir usuário autenticado, opcao sair e menu completo -->
        
        <?php if(isset($_SESSION["nome"])) : ?>
            <div class="text-right">
                    Usuário: <?=$_SESSION["nome"]; ?> (<?=$_SESSION["perfil"]; ?>)
                    <a href="ControllerLanchonete.php?op=logout">Sair</a>
            </div>

            <!-- navegação http://getbootstrap.com/components/#navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" 
                                data-target="#bs-example-navbar-collapse-1" 
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    
            </nav>
        <?php endif ?>            