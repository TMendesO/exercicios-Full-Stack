window.onload = function () {
	var caixa = document.querySelector("input#nome");
	caixa.onfocus = function () {
		console.log("Focus na caixa de texto nome");
	}
	caixa.onblur = function () {
		console.log("onblur na caixa de texto");
	}
}
