const navegacao__lista = document.querySelectorAll('.navegacao__lista');
function linkAtivo(){
    navegacao__lista.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
navegacao__lista.forEach((item) =>
item.addEventListener('click', linkAtivo));