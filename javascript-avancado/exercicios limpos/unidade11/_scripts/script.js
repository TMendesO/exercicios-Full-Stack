// JavaScript Document
window.onload = function () {
    var url = "http://api.openweathermap.org/data/2.5/weather?";
    var minhaAPI = "dff1d6d6458b2ab9b3137b336babf42a";
    var resultado;
    var cidade;

    cidades.onchange = function () {

        var ajax = null;
        if (window.XMLHttpRequest) {
            ajax = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            ajax = new ActiveXObject('Msxml2.XMLHTTP');
        }

        cidade = cidades.value;

        if (cidade != 0) {
            ajax.open("GET", url + '&appid=' + minhaAPI + '&q=' + cidade + '&units=metric&lang=pt', true);
            ajax.send(null);
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {
                    if (ajax.status == 200) {

                        resultado = JSON.parse(ajax.responseText);

                        temp_mini.innerHTML = resultado.main.temp_min;
                        temp_max.innerHTML = resultado.main.temp_max;
                        nome_cidade.innerHTML = resultado.name;
                        descricao.innerHTML = resultado.weather[0].description;

                    }
                }
            }
        }
    };
}
