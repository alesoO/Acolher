const html = document.querySelector('html');
const checbox = document.querySelector('#darkmode');

checbox.addEventListener('change', function(){
    html.classList.toggle('dark_mode');
});

const checboxmobile = document.querySelector('#darkmode--mobile');

checboxmobile.addEventListener('change', function(){
    html.classList.toggle('dark_mode');
});