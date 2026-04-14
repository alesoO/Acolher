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

	<div class="contact1admin">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="views/img/admin-panel.png" alt="IMG" id="imagem__form--admin">
			</div>
			<?php if (!isset($_POST['editar'])) { ?>
				<form enctype="multipart/form-data" class="contact1-form validate-form" action="./BD/insert_admin.php" method="POST">
					<span class="contact1-form-title">
						Cadastrar Administrador
					</span>

					<div class="inserirfoto__container">
						<div class="avatar-upload">
							<div class="avatar-edit">
								<input name="imagem" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
								<label for="imageUpload"></label>
							</div>
							<div class="avatar-preview">
								<div id="imagePreview" style="background-image: url(views/img/user.png);">
								</div>
							</div>
						</div>
					</div>

					<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
						<input class="input1" type="text" name="Nome" placeholder="Nome do usuário">
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
						<input class="input1" type="text" name="Usuário" placeholder="Usuário">
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
						<input class="input1" type="password" name="Senha" placeholder="Senha">
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
						<input class="input1" type="password" name="Senha_confirm" placeholder="Confirmar senha">
						<span class="shadow-input1"></span>
					</div>

					<div class="container-contact1-form-btn">
						<button type="submit" class="contact1-form-btn">

							Cadastrar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>

						</button>
					</div>
				</form>

				<?php if (isset($_GET['invalido'])) { ?>
					<div id="toast_erro">
						<h5 class="texto__toast">
							Este nome de Usuario já Existe, Escolha outro !
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

			<?php } else { ?>
				<?php while ($array = mysqli_fetch_array($consulta_admins)) { ?>
					<?php if ($array['Id_user'] == $_POST['editar']) { ?>
						<form enctype="multipart/form-data" class="contact1-form validate-form" action="./BD/update_admin.php" method="POST">
							<span class="contact1-form-title">
								Editar Administrador
							</span>

							<div class="inserirfoto__container">
								<div class="avatar-upload">
									<div class="avatar-edit">
										<input name="imagem" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
										<label for="imageUpload"></label>
									</div>
									<div class="avatar-preview">
										<div id="imagePreview" style="background-image: url(views/img/user.png);">
										</div>
									</div>
								</div>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input type="hidden" name="Id_user" value="<?php echo $array['Id_user'] ?>">
								<input class="input1" type="text" value="<?php echo $array['Nome'] ?>" name="Nome" placeholder="Nome do usuário">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="text" value="<?php echo $array['Usuario'] ?>" name="Usuário" placeholder="Usuário">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="password" name="Senha" placeholder="Senha">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="password" name="Senha_confirm" placeholder="Confirmar senha">
								<span class="shadow-input1"></span>
							</div>

							<div class="container-contact1-form-btn">
								<button type="submit" class="contact1-form-btn">

									Cadastrar
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>

								</button>
							</div>
						</form>
			<?php }
				}
			} ?>
		</div>
	</div>
	<?php } ?>
</main>