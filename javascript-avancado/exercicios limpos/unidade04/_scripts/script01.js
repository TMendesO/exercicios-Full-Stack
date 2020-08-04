function atribuirTexto() {
	nome.value = "Thiago Mendes"
}

function iniciar() {
	botao.addEventListener("click", atribuirTexto);
}


window.onload = iniciar;
