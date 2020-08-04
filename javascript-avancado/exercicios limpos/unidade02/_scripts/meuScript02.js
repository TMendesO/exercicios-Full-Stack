//======Opção 1====
//var meuElemento = document.getElementById("opcoesPizza");
var meuElemento = document.querySelector("#opcoesPizza");
var novaPizza = document.createElement("li");


//======adiciona elemento novo na lista
meuElemento.appendChild(novaPizza);


//======Atribuir valor ao item list
novaPizza.innerHTML = "Mussarela com Calabresa";


//-========Opção 2====
meuElemento.appendChild(document.createElement("li")).innerHTML = "camarão";
meuElemento.appendChild(document.createElement("li")).innerHTML = "Presunto";
meuElemento.appendChild(document.createElement("li")).innerHTML = "Vegana";


//-========Opção 3====

document.querySelector("#opcoesPizza").appendChild(document.createElement("li")).innerHTML = "Tentação";
