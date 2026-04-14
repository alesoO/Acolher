<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height ">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-5 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">Maior site de adoção e doação de cães e gatos de rua</span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Seja bem vindo(a) a Acolher</h1>
                                <p data-animation="fadeInLeft" data-delay=".8s">Somos a Acolher, o maior site de adoção de cães e gatos
                                    temos como objetivo diminuir o indicie de abondono de animais domesticos e para isso precisamos da
                                    colaboração e do amor do ser humano, clique no botão abaixo para saber mais sobre nossa empresa.</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1s" href="?pagina=sobre" class="btn__header radius-btn" style="max-width: 200px;">Saiba mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right">
                                <img src="views/img/caoegatohero.png" alt="" data-animation="fadeInRight" data-delay="1s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Tarefas realizadas em qualquer animal resgatado.</h3>
                        <p>Estas são as terefas realizadas em qualquer animal resgatado ao chegar em alguma das nossas instituiçoes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="views/img/banho-de-banheira.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Banho</h3>
                            <p>Realizamos a higienização completa do animal, desde pulgas e carrapatos até tosa e hidratação dos pelos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="views/img/veterinario.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Tratamento veterinario</h3>
                            <p>Realizamos todos os exames e tratamentos necessarios para o melhor estado de saúde do animal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="views/img/cachorro-sentado.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Adestramento</h3>
                            <p>Também realizamos adestramento caso o animal seja muito agressivo por conta de mals tratos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="views/img/pet_care.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span>Salve um animal</span> <br>
                                das ruas</h3>
                            <p>O número de animais abandonados so cresce no mundo todo <br> um pouco de amor já é o
                                suficiente para mudar isso <br>Caso encrontre um animal de rua de um pouco de
                                amor e carinho ele so prescisa disso.<br>
                            </p>
                            <?php if (isset($_SESSION['login'])) { ?>
                                <section id="intro">

                                    <div id="intro-content" class="center-content">

                                        <div class="center-content-inner">

                                            <div class="content-section content-section-margin">

                                                <div class="content-section-grid clearfix">

                                                    <a href="?pagina=inserir_animal" class="button nav-link">

                                                        <div class="bottom"></div>

                                                        <div class="top">

                                                            <div class="label">doar</div>

                                                            <div class="button-border button-border-left"></div>
                                                            <div class="button-border button-border-top"></div>
                                                            <div class="button-border button-border-right"></div>
                                                            <div class="button-border button-border-bottom"></div>

                                                        </div>

                                                    </a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </section>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pet_care_area_end  -->

    <!-- animal count -->
    <div class="adapt_area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="adapt_help">
                        <div class="section_title">
                            <h3><span>Nos ajude a</span>
                                ajudar outros animais</h3>
                            <p>A sua colaboração é muito importante para todos nós,
                                adote um animal e ajude a combater o abandono, adotar é amar de graça.</p>
                            <section id="intro">

                                <div id="intro-content" class="center-content">

                                    <div class="center-content-inner">

                                        <div class="content-section content-section-margin">

                                            <div class="content-section-grid clearfix">

                                                <a href="?pagina=galeria_adotar" class="button nav-link">

                                                    <div class="bottom"></div>

                                                    <div class="top">

                                                        <div class="label">Adotar</div>

                                                        <div class="button-border button-border-left"></div>
                                                        <div class="button-border button-border-top"></div>
                                                        <div class="button-border button-border-right"></div>
                                                        <div class="button-border button-border-bottom"></div>

                                                    </div>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="adapt_about">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="views/img/cao e gato c.png" alt="" style="width: 80px; height: 80px;">
                                    <div class="adapt_content">
                                        <h3 class="counter"><?php echo $total_anim; ?></h3>
                                        <p>Animais diponiveis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="views/img/cachorro a.png" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter"><?php echo $consulta_cachorro; ?></span></h3>
                                        <p>Cachorros diponiveis</p>
                                    </div>
                                </div>
                                <div class="single_adapt text-center">
                                    <img src="views/img/gato a.png" alt="" style="width: 80px; height: 80px;">
                                    <div class="adapt_content">
                                        <h3><span class="counter"><?php echo $consulta_gato; ?></span></h3>
                                        <p>Gatos diponiveis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- animal count end -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="views/img/testemunha 1.jpg" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Gustavo Henrique</h4>
                                    <span>Estudante</span>
                                    <p>Me sentia muito sozinho até conhecer este site, não pensei duas vezes e adotei o slink, hoje sou uma pessoa muito melhor com o slink ao meu lado, tenho que agradescer a acolher por esse feito que mudou minha vida. </p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="views/img/testemunha2.jpeg" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Lara Rodrigues</h4>
                                    <span>Médica</span>
                                    <p>Desde a faculdade venho pensando em adotar um animalzinho, mas devido a falta de tempo não tive como correr atras, até um dia um amigo me recomendar este site, hoje tenho 2 cachorros e um gato me fazendo compania, obriga acolher pelo atendimento exepicional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="views/img/testemunha3.jpg" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Kevin Gonçalves</h4>
                                    <span>Marceneiro</span>
                                    <p>Tenho 3 filhos e eles sempre me pediam um cachorrinho, porem eu não ficava seguro em levar um cachorro de rua, pelo medo de que ele poderia transmitir doenças, até que eles me mostraram a acolher, o atendimento deles me passou muita segurança e confiabilidade, hoje meus filhos se divertem muito com os dois cachorros que adotamos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    if (isset($_GET['funcionou'])) { ?>

        <div id="toast">
            <h5 class="texto__toast">
                Seu novo amigo espera ansioso por vc, entraremos em contato por email para mais informações!
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
    <!-- testmonial_area_end  -->

    <!-- OWl carousel -->

</main>