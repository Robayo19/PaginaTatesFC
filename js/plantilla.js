let input2 = document.getElementById("search-input");
let card1 = document.getElementsByClassName("card");
let nombree = document.getElementsByClassName("player-name");
let position = document.getElementsByClassName("team-name");

function buscar() {
    let buscador = input2.value.toLowerCase();

    for (let i = 0; i < card1.length - 1; i++) {
        let nombre = nombree[i].textContent.toLowerCase();
        if (nombre.includes(buscador)) {
            card1[i].style.display = 'block';
        } else {
            card1[i].style.display = 'none';
        }
    }
}

input2.addEventListener("keyup", buscar);