function atribuirTexto(valor) {
	nome.value = valor;
}

function iniciar() {
	botao.addEventListener("click", function () {
		atribuirTexto("Mendes")
	});
}

window.onload = iniciar;
