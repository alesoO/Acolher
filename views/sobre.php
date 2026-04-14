<main>
    <!-- About Start -->
    <div class="container-xxl py-5 sobre__main">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp sobre__img" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5 " src="views/img/foto teste sobre.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 ps-2 pb-2 foto__sobre--2" src="views/img/fotosobre2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 sobre__titulo--small">Sobre nós</div>
                        <h1 class="display-6 mb-5">Temos o objetivo de ajudar animais do mundo todo.</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4 sobre__box">
                            <p class="text-dark mb-2">Eu vou erradicar o abandono de animais, mesmo que eu demore minha vida toda para realizar esse desejo!</p>
                            <span class="text-primary box__text--color">David Gabriel, Fundador</span>
                        </div>
                        <p class="mb-5">Desde está frase dita pelo nosso fundador todos nós da acolher mantemos este objetivo de erradicar o abandono,
                            os animais não merecem tal crueldade!</p>
                        <a class="btn btn-primary py-2 px-3 me-3 btn__sobre--adotar" href="?pagina=galeria_adotar">
                            Adotar
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2 icon__adotar">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <?php if (isset($_SESSION['login'])) { ?>
                            <a class="btn btn-outline-primary py-2 px-3 btn__sobre--doar" href="?pagina=inserir_animal">
                                Doar
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2 icon__doar">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 sobre__titulo--small">Nossas póliticas</div>
                <h1 class="display-6 mb-5">Saiba mais dos nossos seriviços</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid-servises mb-4" src="views/img/banho-de-banheira.png" alt="">
                        <h4 class="mb-3">Banho</h4>
                        <p class="mb-4">Realizamos a higienização completa do animal, desde pulgas e carrapatos até tosa e hidratação dos pelos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid-servises mb-4" src="views/img/veterinario.png" alt="">
                        <h4 class="mb-3">Tratamento veterinario</h4>
                        <p class="mb-4">Realizamos todos os exames e tratamentos necessarios para o melhor estado de saúde do animal.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid-servises mb-4" src="views/img/cachorro-sentado.png" alt="">
                        <h4 class="mb-3">Adestramento</h4>
                        <p class="mb-4">Também realizamos adestramento caso o animal seja muito agressivo por conta de mals tratos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 sobre__titulo--small">Nossos desenvolvedores</div>
                <h1 class="display-6 mb-5">Todas as pessoas que tornaram tudo isso póssivel</h1>
            </div>
            <div class="row g-4 foto__dev">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid-team" src="views/img/David.jpg" alt="">
                        </div>
                        <div class="team-text  text-center p-4">
                            <h5>David</h5>
                            <p class="sobre__devs--funcao">Front End</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid-team" src="views/img/Alexandre.jpg" alt="">
                        </div>
                        <div class="team-text  text-center p-4">
                            <h5>Alexandre</h5>
                            <p class="sobre__devs--funcao">Back End</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid-team" src="views/img/Cassio.jpg" alt="">
                        </div>
                        <div class="team-text  text-center p-4">
                            <h5>Cassio</h5>
                            <p class="sobre__devs--funcao">Banco de dados</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->
</main>