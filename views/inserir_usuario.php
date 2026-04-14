<main>
	<div class="contact1usuario">
		<div class="container-contact1">

			<?php if (!isset($_POST['editar'])) { ?>
				<div class="contact1-pic js-tilt" data-tilt>
					<img src="views/img/login.png" alt="IMG">
				</div>

				<form enctype="multipart/form-data" class="contact1-form validate-form" action="./BD/insert_usuario.php" method="POST">
					<span class="contact1-form-title">
						Cadastrar usuário
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
						<input class="input1" type="email" name="Email" placeholder="Email">
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
						<input class="input1" type="text" name="Endereço" placeholder="Endereço">
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
				<?php while ($array = mysqli_fetch_array($consulta_usuarios)) { ?>
					<?php if ($array['Id_user'] == $_POST['editar']) { ?>

						<div class="contact1-pic js-tilt" data-tilt>
							<img src="views/img/editar.png" alt="IMG">
						</div>

						<form enctype="multipart/form-data" class="contact1-form validate-form" action="./BD/update_usuario.php" method="POST">
							<span class="contact1-form-title">
								Editar usuário
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
							<input type="hidden" name="Id_User" value="<?php echo $array['Id_user'] ?>">

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="text" value="<?php echo $array['Nome'] ?>" name="Nome" placeholder="Nome do usuário">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="text" value="<?php echo $array['Usuario'] ?>" name="Usuário" placeholder="Usuário">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="email" value="<?php echo $array['Email'] ?>" name="Email" placeholder="Email">
								<span class="shadow-input1"></span>
							</div>

							<div class="wrap-input1 validate-input" data-validate="Este campo é obrigatorio!">
								<input class="input1" type="text" value="<?php echo $array['Endereço'] ?>" name="Endereço" placeholder="Endereço">
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

									Editar
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>

								</button>
							</div>
						</form>
			<?php }
				}
			} ?>
		</div>
	</div>

</main>