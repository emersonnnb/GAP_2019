<?php session_start();
include ('validacao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GAP - Sistemas</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
               <a href="menu.php"> <h3>GAP Sistemas</h3></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#produtos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="menu_produtos"><i class="fas fa-list"></i> Produtos</a>
                    <ul class="collapse list-unstyled"  id="produtos">
                        <li>
                            <a href="menu.php?p=listar_produtos">- Listar</a>
                        </li>
                        <li>
                            <a href="menu.php?p=cadastrar_produto">- Cadastrar</a>
                        </li>                        
                    </ul>
                </li>
                <li>
                    <a href="#fornecedor" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="menu_fornecedor"><i class="fas fa-list"></i> Fornecedor</a>
                    <ul class="collapse list-unstyled"  id="fornecedor">
                        <li>
                            <a href="#">- Listar</a>
                        </li>
                        <li>
                            <a href="menu.php?p=cadastrar_fornecedor">- Cadastrar</a>
                        </li>                        
                    </ul>
                </li>
                <li>
                    <a href="#categoria" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-folder"></i> Categoria</a>
                    <ul class="collapse list-unstyled " id="categoria">
                    <li>
                            <a href="menu.php?p=listar_categoria">- Listar</a>
                        </li>
                        <li>
                            <a href="menu.php?p=cadastrar_categoria">- Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#usuarios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-cog"></i> Usuários</a>
                    <ul class="collapse list-unstyled " id="usuarios">
                        <li>
                            <a href="menu.php?p=cadastrar_usuario">- Cadastrar</a>
                        </li>
                        <li>
                            <a href="menu.php?p=aprovar_usuario">- Aprovar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <!--<ul class="collapse list-unstyled " id="usuarios">
                        <li>
                            <a href="menu.php?p=cadastrar_usuario">- Logout</a>
                        </li>
                        
                    </ul>
                    -->
                </li>
            </ul>
           
        </nav>

        <!-- Page Content  -->
         <div id="content">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                </button>
            </div>
            <!--<div class="line"></div>-->
            <div>
                <?php
                    if(isset($_GET["p"])) 
                        $p = $_GET["p"];
                      else
                        $p = "home";
                    
                    include("".$p.".php");
                ?>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
            <?php if (isset($_GET["p"])) { ?>
                $(<?= "'#".$p."'"?>).show()
                
                ;
            <?php } ?>
        });
    </script>
</body>

</html>