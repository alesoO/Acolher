<main>
    <?php if ($_GET['Especie'] == 'cachorro') { ?>
        <?php while ($array = mysqli_fetch_array($resultado_cao)) { ?>
            <?php if ($array['Id_Cachorro'] == $_GET['Id_animal']) { ?>
                <div class="animal__container">
                    <div class="box__animal">
                        <div class="box__conteudo">
                            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item gato mb-30 wow fadeInUp animal__img">
                                <div class="single-portfolio-content">
                                    <?php echo '<img class="container__imagem--animal" src="data:image/jpeg;base64,' . base64_encode($array['Imagem']) . '"/>'; ?>
                                </div>
                            </div>
                            <div class="container__texto">
                                <h1><?php echo $array['Nome_Cachorro']; ?></h1>
                                <ul>
                                    <li><span class="texto__subtitulo">Raça: </span><span><?php echo $array['Raca']; ?></span></li>
                                    <li><span class="texto__subtitulo">Tamanho: </span><span><?php echo $array['Tamanho']; ?></span></li>
                                    <li><span class="texto__subtitulo">Sexo: </span><span><?php echo $array['Sexo']; ?></span></li>
                                    <li><span class="texto__subtitulo">Idade: </span><span><?php echo $array['Idade']; ?></span></li>
                                </ul>

                                <h4 class="titulo__descricao">Descrição do animal:</h4>

                                <div class="container__descricao">
                                    <p class="animal__descricao"><?php echo $array['Descricao']; ?></p>
                                </div>

                                <form action="./BD/adopt.php" method="POST" class="login100-form validate-form">

                                    <input type="hidden" name="Id_User" value="<?php echo $imagem['Id_user'] ?>">
                                    <input type="hidden" name="Id_Cachorro" value="<?php echo $array['Id_Cachorro'] ?>">
                                    <input type="hidden" name="Usuario" value="<?php echo $imagem['Usuario'] ?>">
                                    <?php if ($_SESSION['admin'] == false) { ?>
                                        <input type="hidden" name="Email" value="<?php echo $imagem['Email'] ?>">
                                        <div class="container__botao">
                                            <!-- Use a button to open the snackbar -->
                                            <button type="submit" class="btn__adotar--cachorro">Adotar animal</button>
                                        </div>
                                    <?php } ?>
                                </form>
                                <?php if ($_SESSION['admin'] == true) { ?>
                                    <form action="./BD/delete_animal.php" method="POST" class="login100-form validate-form">
                                        <input type="hidden" name="Id_Cachorro" value="<?php echo $array['Id_Cachorro'] ?>">
                                        
                                        <td><a class="btn btn-sm btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $array['Id_Cachorro'] ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
                                        
                                        <div class="modal fade" id="deleteModal<?php echo $array['Id_Cachorro'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Aviso</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tem certeza que deseja apagar o cadastro do <?php echo $array['Nome_Cachorro']; ?> ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-warning">Sim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                </div>

                </div>
    <?php }
        }
    } ?>

    <?php if ($_GET['Especie'] == 'gato') { ?>
        <?php while ($array = mysqli_fetch_array($resultado_gato)) { ?>
            <?php if ($array['Id_Gatos'] == $_GET['Id_animal']) { ?>
                <div class="animal__container">
                    <div class="box__animal">
                        <div class="box__conteudo">
                            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item gato mb-30 wow fadeInUp animal__img">
                                <div class="single-portfolio-content">
                                    <?php echo '<img class="container__imagem--animal" src="data:image/jpeg;base64,' . base64_encode($array['Imagem']) . '"/>'; ?>
                                </div>
                            </div>
                            <div class="container__texto">
                                <h1><?php echo $array['Nome_Gatos']; ?></h1>
                                <ul>
                                    <li><span class="texto__subtitulo">Raça: </span><span><?php echo $array['Raca']; ?></span></li>
                                    <li><span class="texto__subtitulo">Tamanho: </span><span><?php echo $array['Tamanho']; ?></span></li>
                                    <li><span class="texto__subtitulo">Sexo: </span><span><?php echo $array['Sexo']; ?></span></li>
                                    <li><span class="texto__subtitulo">Idade: </span><span><?php echo $array['Idade']; ?></span></li>
                                </ul>

                                <h4 class="titulo__descricao">Descrição do animal:</h4>

                                <div class="container__descricao">
                                    <p class="animal__descricao"><?php echo $array['Descricao']; ?></p>
                                </div>

                                <form action="./BD/adopt.php" method="POST" class="login100-form validate-form">

                                    <input type="hidden" name="Id_User" value="<?php echo $imagem['Id_user'] ?>">
                                    <input type="hidden" name="Id_Gatos" value="<?php echo $array['Id_Gatos'] ?>">
                                    <input type="hidden" name="Usuario" value="<?php echo $imagem['Usuario'] ?>">
                                    <input type="hidden" name="Email" value="<?php echo $imagem['Email'] ?>">

                                    <?php if ($_SESSION['admin'] == false) { ?>
                                        <div class="container__botao">
                                            <!-- Use a button to open the snackbar -->
                                            <button type="submit" class="btn__adotar--cachorro">Adotar animal</button>
                                        </div>
                                    <?php } ?>
                                </form>
                                <?php if ($_SESSION['admin'] == true) { ?>
                                    <form action="./BD/delete_animal.php" method="POST" class="login100-form validate-form">
                                        <input type="hidden" name="Id_Gatos" value="<?php echo $array['Id_Gatos'] ?>">

                                        <td><a class="btn btn-sm btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $array['Id_Gatos'] ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
                                        
                                        <div class="modal fade" id="deleteModal<?php echo $array['Id_Gatos'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Aviso</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tem certeza que deseja apagar o cadastro do <?php echo $array['Id_Gatos'] ?> ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-warning">Sim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                </div>

                </div>
    <?php }
        }
    } ?>

</main>