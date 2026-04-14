<main>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="views/img/img-01.png" alt="IMG">
                </div>

                <form action="./BD/execute_login.php" method="POST" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Faça o login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="O usuario é obrigatorio!">
                        <input class="input100" type="text" name="Usuario" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="A senha é obrigatoria!">
                        <input class="input100" type="password" name="Senha" placeholder="Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="?pagina=trocar_senha">
                            Esqueceu a senha?
                        </a>
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
            </div>
        </div>
    </div>

    <?php if (isset($_GET['erro'])) { ?>
        <div id="toast_erro">
            <h5 class="texto__toast">
                Usuario ou Senha Incorretos, Tente Novamente !
            </h5>
        </div>
        <script>
            // Get the snackbar DIV
            var x = document.getElementById("toast_erro");
            // Add the "show" class to DIV
            x.className = "show";
            // After 10 seconds, remove the show class from DIV
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 10000);
        </script>
    <?php } ?>

</main>