<main>
    <?php if ($_SESSION['admin'] == false) { ?>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Pagina não Encontrada .</p>
                <p class="lead">
                    Não encontramos a pagina que você procura !
                </p>
                <a href="?pagina=home" class="btn btn-primary">Voltar para o inicio</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="container" style="margin-top: 8em; ;">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="table-active">
                        <th scope="row">ID</th>
                        <th scope="row">Nome do Admin</th>
                        <th scope="row">Usuário</th>
                        <th scope="row">Excluir Admin</th>
                    </tr>
                </thead>
                <?php

                while ($array = mysqli_fetch_array($consulta_admins)) {
                    echo '<tr><td>' . $array['Id_user'] . '</td>';
                    echo '<td>' . $array['Nome'] . '</td>';
                    echo '<td>' . $array['Usuario'] . '</td>';
                ?>
                    <td><a class="btn btn-sm btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $array['Id_user']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>

                    <?php
                    if ($array['Id_user'] == $imagem['Id_user']) {
                    ?>
                        <div class="modal fade" id="deleteModal<?php echo $array['Id_user']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Erro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Você não pode apagar o seu proprio usuario logado nele !
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="modal fade" id="deleteModal<?php echo $array['Id_user']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Aviso</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Para apagar o admin <?php echo $array['Usuario']; ?>, Insira a senha:<span class="shadow-input1"></span>
                                        <form enctype="multipart/form-data" class="contact1-form validate-form" action="./BD/delete_admin.php" method="POST">
                                            <div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio">
                                                <input type="hidden" name="Id_user" value="<?php echo $array['Id_user'] ?>">
                                                <input class="input1" type="password" name="Senha" placeholder="Senha">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-warning">Sim</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    <?php } ?>
</main>