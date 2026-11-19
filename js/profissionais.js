// ELEMENTOS DA PÁGINA
const campoBusca = document.getElementById("busca");
const filtroSetor = document.getElementById("filtro-setor");
const filtroCargo = document.getElementById("filtro-cargo");
const filtroSituacao = document.getElementById("filtro-situacao");

const linhas = document.querySelectorAll(".profissional");
const total = document.getElementById("total");
const textoTotal = document.getElementById("texto-total");
const mensagemVazia = document.getElementById("vazio");

// TIRAR ACENTOS (para buscar "debora" e achar "Débora")
function semAcento(texto) {
    return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
}

// FILTRAR A LISTA
function filtrar() {
    const busca = semAcento(campoBusca.value.trim());
    let visiveis = 0;

    linhas.forEach(function (linha) {
        const nome = semAcento(linha.querySelector(".prof-nome").textContent);
        const coren = semAcento(linha.querySelector(".prof-coren").textContent);

        const bateBusca = nome.includes(busca) || coren.includes(busca);
        const bateSetor = filtroSetor.value === "" || filtroSetor.value === linha.dataset.setor;
        const bateCargo = filtroCargo.value === "" || filtroCargo.value === linha.dataset.cargo;
        const bateSituacao = filtroSituacao.value === "todos" || filtroSituacao.value === linha.dataset.situacao;

        if (bateBusca && bateSetor && bateCargo && bateSituacao) {
            linha.hidden = false;
            visiveis++;
        } else {
            linha.hidden = true;
        }
    });

    total.textContent = visiveis;
    textoTotal.textContent = visiveis === 1 ? "profissional" : "profissionais";
    mensagemVazia.hidden = visiveis !== 0;
}

// EVENTOS
campoBusca.addEventListener("input", filtrar);
filtroSetor.addEventListener("change", filtrar);
filtroCargo.addEventListener("change", filtrar);
filtroSituacao.addEventListener("change", filtrar);

// ANIMAÇÃO DE ENTRADA
filtrar();

let posicao = 0;
linhas.forEach(function (linha) {
    if (linha.hidden) return;

    linha.classList.add("escondido");

    setTimeout(function () {
        linha.classList.remove("escondido");
    }, posicao * 90);

    posicao++;
});