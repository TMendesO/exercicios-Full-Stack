function mudarCor(cor) {
	/*document.querySelector("#janela").innerHTML = cor;
	document.querySelector("#janela").className = cor;*/

	janela.className = cor;


}

function iniciar() {
	botao1.addEventListener("click", function () {
		mudarCor("amarelo");
	});

	botao2.addEventListener("click", function () {
		mudarCor("vermelho");
	})
}




window.onload = iniciar;
