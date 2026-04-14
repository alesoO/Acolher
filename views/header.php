<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="">

    <!-- CSS reset -->
    <link rel="stylesheet" href="./css/reset.css">

    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- CSS animate -->
    <link rel="stylesheet" href="./css/animate.css">

    <!-- CSS font awesome and flaticon-->
    <link rel="stylesheet" href="./css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/flaticon.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">

    <!-- CSS responsivo home -->
    <link rel="stylesheet" href="./css/slicknav.css">
    <link rel="stylesheet" href="./css/slick.css">

    <!-- CSS principal de cada elemento -->
    <link rel="stylesheet" href="./css/cabecalhohomefooter.css">
    <link rel="stylesheet" href="./css/cardsmain.css">
    <link rel="stylesheet" href="./css/conteudohome.css">
    <link rel="stylesheet" href="./css/loginmain.css">
    <link rel="stylesheet" href="./css/loginutil.css">
    <link rel="stylesheet" href="./css/inserirutil.css">
    <link rel="stylesheet" href="./css/inserirmain.css">
    <link rel="stylesheet" href="./css/galeriamain.css">
    <link rel="stylesheet" href="./css/animal.css">
    <link rel="stylesheet" href="./css/inserirfoto.css">
    <link rel="stylesheet" href="./css/botoes.css">
    <link rel="stylesheet" href="./css/perfil.css">
    <link rel="stylesheet" href="./css/sidenavmobile.css">
    <link rel="stylesheet" href="./css/sobremain.css">
    <link rel="stylesheet" href="./css/darkmode.css">

    <!-- Css fim -->



    <script src="https://kit.fontawesome.com/792acc9727.js" crossorigin="anonymous"></script>

    <title>Acolher</title>
</head>

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="?pagina=home"><img src="views/img/titulo logo site.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="?pagina=home" class="header__link">Home</a></li>
                                                <?php if (isset($_SESSION['login'])) { ?>
                                                    <li><a href="?pagina=galeria_adotar" class="header__link">Adotar</a></li>
                                                    <li><a href="?pagina=inserir_animal" class="header__link">Doar</a></li>
                                                    <?php if ($_SESSION['admin'] == true) { ?>
                                                        <li><a href="?pagina=usuarios" class="header__link">Usuários</a></li>
                                                        <li><a href="#" class="header__link">Administradores</a>
                                                            <ul class="submenu">
                                                                <li><a href="?pagina=admin">Listar</a>
                                                                <li><a href="?pagina=inserir_admin">Cadastrar</a></li>
                                                            </ul>
                                                        </li>
                                                <?php }
                                                } ?>
                                                <li><a href="?pagina=sobre" class="header__link">Sobre</a></li>
                                                <!-- Button -->
                                                <?php if (isset($_SESSION['login']) == false) { ?>
                                                    <li class="button-header margin-left "><a href="?pagina=inserir_usuario" class="btn__header header__link">Cadastre-se</a></li>
                                                    <li class="button-header margin-left"><a href="?pagina=login" class="btn2 header__link" style="text-decoration: none;">Login</a></li>
                                                <?php } ?>
                                                <?php include "BD/image_usuario.php";
                                                if (isset($_SESSION['login'])) {
                                                ?>
                                                    <li>
                                                        <div class="action">
                                                            <div class="perfil__foto" onclick="abrirmenu();">
                                                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($imagem['Imagem']) . '"/>'; ?>
                                                            </div>
                                                            <div class="perfil__menu">
                                                                <h3>Olá - <?php if (isset($imagem['Nome'])) {
                                                                                echo $imagem['Nome'];
                                                                            } else {
                                                                                echo $imagem['Usuario'];
                                                                            } ?></h3>
                                                                <ul class="perfil__opcoes">
                                                                    <?php if ($_SESSION['admin'] == true) { ?>

                                                                        <form action="?pagina=inserir_admin&editar" method="POST">

                                                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                                                            <li><i class="fa-solid fa-pen-to-square"></i><button class="perfil__links" type="submit">Editar perfil</button></li>

                                                                        </form>

                                                                        <form action="?pagina=trocar_senha&editar" method="POST">

                                                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                                                            <li><i class="fa-solid fa-key"></i><button class="perfil__links" type="submit">Editar senha</button></li>

                                                                        </form>

                                                                    <?php } ?>
                                                                    <?php if ($_SESSION['admin'] == false) { ?>

                                                                        <form action="?pagina=inserir_usuario&editar" method="POST">

                                                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                                                            <li><i class="fa-solid fa-pen-to-square"></i><button class="perfil__links" type="submit">Editar perfil</button></li>

                                                                        </form>
                                                                        <form action="?pagina=trocar_senha&editar" method="POST">

                                                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                                                            <li><i class="fa-solid fa-key"></i><button class="perfil__links" type="submit">Editar senha</button></li>

                                                                        </form>
                                                    </li>
                                                <?php } ?>
                                                <li><i class="fa-solid fa-right-from-bracket"></i><a href="./BD/logout.php" class="perfil__links">Logout</a></li>
                                                <div class="botao__darkmode">
                                                    <input type="checkbox" name="darkmode" id="darkmode" class="darkmode__botao">
                                                    <p id="darkmode__texto">Tema escuro.</p>
                                                </div>
                                            </ul>
                                    </div>
                                </div>
                                </li>
                            <?php } ?>
                            </ul>

                            </nav>

                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="container-fluid sidenav__menu">
                        <!-- box-header -->
                        <div class="box-header">
                            <!-- box-nav -->
                            <a class="box-primary-nav-trigger" href="#0">
                                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
                            </a>
                        </div>
                        <!-- end box-header -->

                        <!-- nav -->
                        <nav>
                            <ul class="box-primary-nav">
                                <li class="box-label">Acolher</li>

                                <li><a href="?pagina=home">Home</a></li>

                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li><a href="?pagina=galeria_adotar">Adotar</a></li>
                                    <li><a href="?pagina=inserir_animal">Doar pet</a></li>
                                    <li><a href="?pagina=sobre">Sobre</a></li>
                                    <?php if ($_SESSION['admin'] == true) { ?>
                                        <li><a href="?pagina=usuarios">Usuários</a></li>
                                        <li class="box-label">Administradores</li>
                                        <li><a href="?pagina=admin">Listar</a>
                                        <li><a href="?pagina=inserir_admin">Cadastrar</a></li>

                                        </li>
                                <?php }
                                } ?>


                                <?php if (isset($_SESSION['login']) == false) { ?>
                                    <li><a href="?pagina=inserir_usuario">Cadastre-se</a></li>
                                    <li><a href="?pagina=login" style="text-decoration: none;">Login</a></li>
                                <?php } ?>

                                <?php include "BD/image_usuario.php";
                                if (isset($_SESSION['login'])) { ?>

                                    <li class="box-label">Perfil - <?php if (isset($imagem['Nome'])) {
                                                                        echo $imagem['Nome'];
                                                                    } else {
                                                                        echo $imagem['Usuario'];
                                                                    } ?>
                                    </li>
                                    <?php if ($_SESSION['admin'] == true) { ?>
                                        <form action="?pagina=inserir_admin&editar" method="POST">

                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                            <li><i class="fa-solid fa-pen-to-square"></i><button class="perfil__links" type="submit">Editar perfil</button></li>

                                        </form>

                                        <form action="?pagina=trocar_senha&editar" method="POST">

                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                            <li><i class="fa-solid fa-key"></i><button class="perfil__links" type="submit">Editar senha</button></li>

                                        </form>
                                    <?php } ?>
                                    <?php if ($_SESSION['admin'] == false) { ?>
                                        <form action="?pagina=inserir_usuario&editar" method="POST">

                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                            <li><i class="fa-solid fa-pen-to-square"></i><button class="perfil__links" type="submit">Editar perfil</button></li>

                                        </form>
                                        <form action="?pagina=trocar_senha&editar" method="POST">

                                            <input type="hidden" name="editar" value="<?php echo $imagem['Id_user'] ?>">

                                            <li><i class="fa-solid fa-key"></i><button class="perfil__links" type="submit">Editar senha</button></li>

                                        </form>
                                    <?php } ?>
                                    <li><a href="./BD/logout.php">Logout</a></li>

                                    <div class="botao__darkmode--mobile">
                                        <input type="checkbox" name="darkmode--mobile" id="darkmode--mobile" class="darkmode__botao--mobile">
                                        <p id="darkmode__texto--mobile">Tema escuro.</p>
                                    </div>

                                <?php } ?>


                                <li class="box-label">Nossas redes sociais</li>

                                <li class="box-social"><a href="#0"><i class="fa-brands fa-facebook"></i></a></li>
                                <li class="box-social"><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                <li class="box-social"><a href="#0"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="box-social"><a href="#0"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </nav>
                        <!-- end nav -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Header End -->

    </header>