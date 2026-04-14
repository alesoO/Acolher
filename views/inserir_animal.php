<main>
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="views/img/cadastraranimal.png" alt="IMG">
            </div>

            <form enctype="multipart/form-data" class="contact1-form validate-form" id="form" action="./BD/insert_animal.php" method="POST">
                <span class="contact1-form-title">
                    Cadastrar animal
                </span>

                <div class="inserirfoto__container validate-input" id="imagem" data-validate="imagem obrigatoria">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input name="imagem" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(views/img/addanimal.jpg);">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Insira um nome!">
                    <input class="input1" type="text" name="Nome" placeholder="Nome do animal">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-select1 input__especie" data-validate="Especifique uma espécie!" id="especie">
                    <select class="select1 validate-change1" name="Especie" aria-label="Default select example">
                        <option selected disabled hidden>Selecione a especie do animal</option>
                        <option value="Cachorro">Cachorro</option>
                        <option value="Gato">Gato</option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Insira a raça do animal!" id="raca">
                    <input class="input1" type="text" name="Raça" placeholder="Raça">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-select2 input__tamanho" data-validate="Especifique o tamanho!" id="tamanho">
                    <select class="select1 validate-change2" name="Tamanho" aria-label="Default select example">
                        <option selected disabled hidden>Selecione o tamanho</option>
                        <option value="Mini">Mini</option>
                        <option value="Pequeno">Pequeno</option>
                        <option value="Medio">Medio</option>
                        <option value="Grande">Grande</option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-select3 input__sexo" data-validate="Especifique o sexo!" id="sexo">
                    <select class="select1 validate-change3" name="Sexo" aria-label="Default select example">
                        <option selected disabled hidden>Selecione o sexo do animal</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>

                <div class="idade__animal">
                    <div class="wrap-input1 validate-input input__idade" data-validate="Informe a idade aproximada!" id="idade">
                        <input class="input1" type="number" name="Idade" placeholder="Idade">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-select4 input__idade" data-validate="Especifique o tipo de idade!" id="tipoidade">
                        <select class="select1 validate-change4" name="Tipo_idade" aria-label="Default select example">
                            <option selected disabled hidden>Meses ou Anos ?</option>
                            <option value=" Meses">Meses</option>
                            <option value=" Anos">Anos</option>
                        </select>
                        <span class="shadow-input1"></span>
                    </div>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Insira uma descrição, por exemplo, onde o animal foi encontrado, em que condiçoes foi encontrado." id="descricao">
                    <textarea class="input1" id="the-textarea" name="Descricao" maxlength="300" placeholder="Descrição"></textarea>
                    <div id="the-count">
                        <span id="current">0</span>
                        <span id="maximum">/ 300</span>
                    </div>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button type="submit" class="contact1-form-btn">

                        Cadastrar animal
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </button>
                </div>
            </form>
        </div>
    </div>

</main>