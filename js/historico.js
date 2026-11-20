// ELEMENTOS DA PÁGINA
const campoBusca = document.getElementById("busca");
const filtroCategoria = document.getElementById("filtro-categoria");
const eventos = document.querySelectorAll(".evento");
const mensagemVazia = document.getElementById("vazio");

// TIRAR ACENTOS (para buscar "inconsistencias" e achar "inconsistências")
function semAcento(texto) {
    return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
}

// FILTRAR O HISTÓRICO
function filtrar() {
    const busca = semAcento(campoBusca.value.trim());
    let ultimoVisivel = null;

    eventos.forEach(function (evento) {
        evento.classList.remove("ultimo");

        const bateBusca = semAcento(evento.textContent).includes(busca);
        const bateCategoria = filtroCategoria.value === "" || filtroCategoria.value === evento.dataset.categoria;

        evento.hidden = !(bateBusca && bateCategoria);

        if (!evento.hidden) {
            ultimoVisivel = evento;
        }
    });

    // O último evento visível não desenha a linha para baixo
    if (ultimoVisivel) {
        ultimoVisivel.classList.add("ultimo");
    }

    mensagemVazia.hidden = ultimoVisivel !== null;
}

campoBusca.addEventListener("input", filtrar);
filtroCategoria.addEventListener("change", filtrar);
filtrar();

// ANIMAÇÃO DE ENTRADA
let posicao = 0;

eventos.forEach(function (evento) {
    if (evento.hidden) return;

    evento.classList.add("escondido");

    setTimeout(function () {
        evento.classList.remove("escondido");
    }, posicao * 100);

    posicao++;
});