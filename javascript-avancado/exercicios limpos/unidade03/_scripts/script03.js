window.onload = function () {
	var meu_pais = document.querySelector("#pais");

	meu_pais.onchange = function () {
		console.log("O pais selecionado foi " + meu_pais.value);
	}

}
