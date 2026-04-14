<main>
    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn__galeria active" data-filter="*">Todos</button>
                            <button class="btn__galeria" data-filter=".cao">Cães</button>
                            <button class="btn__galeria" data-filter=".gato">Gatos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <?php
                while ($dados_cachorro =  mysqli_fetch_array($resultado_cao)) {
                    if ($dados_cachorro['Adotado_por_Id'] == 0) { ?>
                        <!-- Single Gallery Item -->
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item cao mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="single-portfolio-content">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($dados_cachorro['Imagem']) . '"/>'; ?>
                                <div class="hover-content">
                                    <p class="texto__animal--hover">Nome: <?php echo $dados_cachorro['Nome_Cachorro']; ?></p>
                                    <p class="texto__animal--hover">Raça: <?php echo $dados_cachorro['Raca']; ?></p>
                                    <p class="texto__animal--hover">Idade: <?php echo $dados_cachorro['Idade']; ?></p>
                                    <?php if (isset($_SESSION['login'])) { ?>
                                        <a href="?pagina=animal&Especie=cachorro&Id_animal=<?php echo $dados_cachorro['Id_Cachorro']; ?>" class="portfolio-img">Adotar</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <?php
                while ($dados_gato =  mysqli_fetch_array($resultado_gato)) {
                    if ($dados_gato['Adotado_por_Id'] == 0) { ?>
                        <!-- Single Gallery Item -->
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item gato mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="single-portfolio-content">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($dados_gato['Imagem']) . '"/>'; ?>
                                <div class="hover-content">
                                    <p class="texto__animal--hover">Nome: <?php echo $dados_gato['Nome_Gatos']; ?></p>
                                    <p class="texto__animal--hover">Raça: <?php echo $dados_gato['Raca']; ?></p>
                                    <p class="texto__animal--hover">Idade: <?php echo $dados_gato['Idade']; ?></p>
                                    <?php if (isset($_SESSION['login'])) { ?>
                                        <a href="?pagina=animal&Especie=gato&Id_animal=<?php echo $dados_gato['Id_Gatos']; ?>" class="portfolio-img">Adotar</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>

        </div>
    </div>
    <!-- Gallery Area End -->
    <?php
    if (isset($_GET['funcionou'])) { ?>
        <div id="toast">
            <h5 class="texto__toast">
                Cadstro do animal deletado com sucesso !
            </h5>
        </div>
        <script>
            // Get the snackbar DIV
            var x = document.getElementById("toast");
            // Add the "show" class to DIV
            x.className = "show";
            // After 10 seconds, remove the show class from DIV
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 10000);
        </script>
    <?php } ?>

</main>