function detectarResolucao() {
	var largura;
	var arquivoCSS = document.querySelector("#meuCSS");

	if (window.innerWidth) {
		largura = window.innerWidth;
	} else if (document.documentElement && document.documentElement.clientWidth) {
		largura = document.documentElement.clientWidth;
	} else if (document.body) {
		largura = document.body;

	}

	if (largura < 400) {
		arquivoCSS.setAttribute("href", "_css/css_smartphone.css");
	} else {
		arquivoCSS.setAttribute("href", "_css/css_desktop.css");
	}

}

window.onload = window.onresize = detectarResolucao;
