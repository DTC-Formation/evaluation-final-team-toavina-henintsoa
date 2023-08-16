$(document).ready(function(){

});

function displayLoader( ) {
    const loaderContainer = document.getElementById('container-loader');
    const loader = document.getElementById('loader');

    setTimeout( () => {
        loader.style.display = "none";
        loaderContainer.style.display = "none";
    }, 2000);

}

displayLoader();

document.getElementById('search').addEventListener(displayLoader);