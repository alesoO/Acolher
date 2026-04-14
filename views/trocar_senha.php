<main>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="views/img/img-01 senha.png" alt="IMG">
                </div>
                <?php if (!isset($_POST['editar'])) { ?>
                    <form action="./BD/update_senha.php" method="POST" class="login100-form validate-form">
                        <span class="login100-form-title">
                            Redefinir Senha
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="O usuario é obrigatorio!">
                            <input class="input100" type="text" name="Usuario" placeholder="Usuario">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Email é obrigatorio!">
                            <input class="input100" type="Email" name="Email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                            <input class="input100" type="password" name="Senha" placeholder="Nova Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                            <input class="input100" type="password" name="Senha_confirm" placeholder="Confirma Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Redefinir
                            </button>
                        </div>

                        <div class="text-center p-t-136">
                            <span class="txt1">
                                Se não possui conta,
                            </span>
                            <a class="txt2" href="?pagina=inserir_usuario">
                                Cadastre-se agora!
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                    <?php } else {

                    if ($_SESSION['admin'] == true) {
                        while ($array = mysqli_fetch_array($consulta_admins)) {
                            if ($array['Id_user'] == $_POST['editar']) { ?>

                                <form action="./BD/update_senha.php" method="POST" class="login100-form validate-form">
                                    <span class="login100-form-title">
                                        Redefinir Senha Admin
                                    </span>

                                    <div class="wrap-input100 validate-input" data-validate="O usuario é obrigatorio!">
                                        <input class="input100" type="text" value="<?php echo $imagem['Usuario']; ?>" name="Usuario" placeholder="Usuario" readonly>
                                        <input type="hidden" name="Id_User" value="<?php echo $array['Id_user'] ?>">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha" placeholder="Senha Atual">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha" placeholder="Nova Senha">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha_confirm" placeholder="Confirma nova senha">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn">
                                            Redefinir
                                        </button>
                                    </div>
                                </form>

                            <?php }
                        }
                    }
                    if ($_SESSION['admin'] == false) {
                        while ($array = mysqli_fetch_array($consulta_usuarios)) {
                            if ($array['Id_user'] == $_POST['editar']) { ?>

                                <form action="./BD/update_senha.php" method="POST" class="login100-form validate-form">
                                    <span class="login100-form-title">
                                        Redefinir Senha Usuario
                                    </span>

                                    <div class="wrap-input100 validate-input" data-validate="O usuario é obrigatorio!">
                                        <input class="input100" type="text" value="<?php echo $imagem['Usuario']; ?>" name="Usuario" placeholder="Usuario" readonly>
                                        <input type="hidden" name="Id_User" value="<?php echo $array['Id_user'] ?>">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha" placeholder="Senha Atual">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha" placeholder="Nova Senha">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                                        <input class="input100" type="password" name="Senha_confirm" placeholder="Confirma nova senha">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn">
                                            Redefinir
                                        </button>
                                    </div>
                                </form>

                            <?php }
                        }
                    }
                } ?>
            </div>
        </div>
    </div>
</main>