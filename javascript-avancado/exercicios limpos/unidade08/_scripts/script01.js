function iniciar() {
    var minhaFoto = document.querySelector("#espacofoto");



    function mudarFoto() {
        minhaFoto.setAttribute("src", "_img/basilica.jpg");

    }

    setTimeout(mudarFoto, 5000);


}


window.onload = iniciar;
