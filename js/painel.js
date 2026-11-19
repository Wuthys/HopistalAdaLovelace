// ---------- 1) Contador: o número sobe de 0 até o valor final ----------
function contar(elemento) {
    const total = Number(elemento.dataset.valor); // lê o data-valor do HTML
    const passo = Math.max(1, Math.ceil(total / 40));
    let atual = 0;

    const timer = setInterval(function () {
        atual = atual + passo;

        if (atual >= total) {
            atual = total;
            clearInterval(timer); // para quando chegar no valor final
        }

        elemento.textContent = atual;
    }, 30);
}

// ---------- 2) Animação de entrada dos cartões e das caixas ----------
const cartoes = document.querySelectorAll(".cartao");
const caixas = document.querySelectorAll(".caixa");

// Esconde tudo primeiro
cartoes.forEach(function (cartao) {
    cartao.classList.add("escondido");
});
caixas.forEach(function (caixa) {
    caixa.classList.add("escondido");
});

// Mostra um por vez, com um pequeno atraso entre eles
cartoes.forEach(function (cartao, posicao) {
    setTimeout(function () {
        cartao.classList.remove("escondido");
        contar(cartao.querySelector(".numero"));
    }, posicao * 120);
});

caixas.forEach(function (caixa, posicao) {
    setTimeout(function () {
        caixa.classList.remove("escondido");
    }, 500 + posicao * 150);
});

// ---------- 3) Fluxo da escala: a linha verde vai crescendo ----------
const fluxo = document.getElementById("fluxo");
const preenchido = document.getElementById("trilho-preenchido");
const etapas = document.querySelectorAll(".etapa");

const etapaAtual = Number(fluxo.dataset.etapa); // 1 a 5, vem do HTML (depois do PHP)

// Cresce a linha até a etapa atual
setTimeout(function () {
    const porcentagem = ((etapaAtual - 1) / (etapas.length - 1)) * 100;
    preenchido.style.width = porcentagem + "%";
}, 900);

// Pinta os pontos um de cada vez, acompanhando a linha
etapas.forEach(function (etapa, posicao) {
    setTimeout(function () {
        if (posicao < etapaAtual - 1) {
            etapa.classList.add("feito");
        } else if (posicao === etapaAtual - 1) {
            etapa.classList.add("atual");
        }
    }, 900 + posicao * 250);
});