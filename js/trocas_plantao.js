// ELEMENTOS DA PÁGINA
const filtroStatus = document.getElementById("filtro-status");
const trocas = document.querySelectorAll(".troca");
const mensagemVazia = document.getElementById("vazio");

// FILTRAR POR SITUAÇÃO
function filtrar() {
    let visiveis = 0;

    trocas.forEach(function (troca) {
        const combina = filtroStatus.value === "todas" || filtroStatus.value === troca.dataset.status;

        troca.hidden = !combina;

        if (combina) {
            visiveis++;
        }
    });

    mensagemVazia.hidden = visiveis !== 0;
}

filtroStatus.addEventListener("change", filtrar);
filtrar();

// ANIMAÇÃO DE ENTRADA
let posicao = 0;

trocas.forEach(function (troca) {
    if (troca.hidden) return;

    troca.classList.add("escondido");

    setTimeout(function () {
        troca.classList.remove("escondido");
    }, posicao * 120);

    posicao++;
});