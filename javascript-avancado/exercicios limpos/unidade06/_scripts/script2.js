function pegarPosicaoMouse(e) {
	var posX = document.querySelector("#posicaoX");
	var posY = document.querySelector("#posicaoY");
	posY.innerHTML = e.clientY;
	posX.innerHTML = e.clientX;

	if (e.clientY < 10) {
		var minhaJanela = document.querySelector("#janela");
		minhaJanela.style.display = "block";
	}
}


document.addEventListener("mousemove", pegarPosicaoMouse);
