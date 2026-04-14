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
                    <th scope="row">Nome do usuário</th>
                    <th scope="row">Usuário</th>
                    <th scope="row">Email</th>
                    <th scope="row">Endereço</th>
                    <th scope="row">Excluir usuário</th>
                    <th scope="row">Editar usuário</th>
                </tr>
            </thead>
            <?php

            while ($array = mysqli_fetch_array($consulta_usuarios)) {
                echo '<tr><td>' . $array['Id_user'] . '</td>';
                echo '<td>' . $array['Nome'] . '</td>';
                echo '<td>' . $array['Usuario'] . '</td>';
                echo '<td>' . $array['Email'] . '</td>';
                echo '<td>' . $array['Endereço'] . '</td>';

            ?>
                <td><a class="btn btn-sm btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $array['Id_user']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
                <td><a class="btn btn-sm btn-warning" role="button" href="?pagina=inserir_usuario&editar=<?php echo $array['Id_user']; ?>"><i class="fa-solid fa-pen"></i>&nbsp;Alterar</a></td>

                <div class="modal fade" id="deleteModal<?php echo $array['Id_user']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Aviso</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Tem certeza que deseja apagar o usuario <?php echo $array['Usuario']; ?> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                <a type="button" href="./BD/delete_usuario.php?Id_User=<?php echo $array['Id_user']; ?>" class="btn btn-warning">Sim</a>
                            </div>
                        </div>
                    </div>
                </div>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <?php } ?>
</main>