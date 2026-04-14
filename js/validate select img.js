const select = document.querySelector('.select1');
const form = document.getElementById('form');
const validate_select1 = document.querySelector('.validate-select1');
const validate_select2 = document.querySelector('.validate-select2');
const validate_select3 = document.querySelector('.validate-select3');
const validate_select4 = document.querySelector('.validate-select4');
const validate_change1 = document.querySelector('.validate-change1');
const validate_change2 = document.querySelector('.validate-change2');
const validate_change3 = document.querySelector('.validate-change3');
const validate_change4 = document.querySelector('.validate-change4');

const indice = select.selectedIndex;
const texto = select.options[indice].text;

form.addEventListener('submit', function(){

    if(texto === "Selecione a especie do animal" || texto === "Selecione o tamanho" || texto === "Selecione o sexo do animal" || texto === "Meses ou Anos ?"){
        validate_select1.classList.toggle('alert-validate');
        validate_select2.classList.toggle('alert-validate');
        validate_select3.classList.toggle('alert-validate');
        validate_select4.classList.toggle('alert-validate');
    }
    else{
        validate_select1.classList.remove('alert-validate');
        validate_select2.classList.remove('alert-validate');
        validate_select3.classList.remove('alert-validate');
        validate_select4.classList.remove('alert-validate');
    }

    validate_change1.addEventListener('change', function(){
        validate_select1.classList.remove('alert-validate')
    });
    validate_change2.addEventListener('change', function(){
        validate_select2.classList.remove('alert-validate')
    });
    validate_change3.addEventListener('change', function(){
        validate_select3.classList.remove('alert-validate')
    });
    validate_change4.addEventListener('change', function(){
        validate_select4.classList.remove('alert-validate')
    });
});





