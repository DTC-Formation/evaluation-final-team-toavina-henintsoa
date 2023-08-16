$(document).ready(function(){

});


const loaderContainer = document.getElementById('container-loader');
const loader = document.getElementById('loader');

setTimeout( () => {
    loader.style.display = "none";
    loaderContainer.style.display = "none";
}, 3000);