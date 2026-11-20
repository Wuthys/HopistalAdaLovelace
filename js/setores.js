// JANELA NOVO SETOR
const janela = document.getElementById("modal-setor");
const formulario = document.getElementById("form-setor");
const botaoAbrir = document.getElementById("abrir-modal");
const botaoFechar = document.getElementById("fechar-modal");
const botaoCancelar = document.getElementById("cancelar-modal");

botaoAbrir.addEventListener("click", function (evento) {
    evento.preventDefault();
    janela.showModal();
});

botaoFechar.addEventListener("click", function () {
    janela.close();
});

botaoCancelar.addEventListener("click", function () {
    janela.close();
});

// Fecha ao clicar fora da janela (no fundo escuro)
janela.addEventListener("click", function (evento) {
    if (evento.target === janela) {
        janela.close();
    }
});

// Limpa o formulário sempre que a janela fechar
janela.addEventListener("close", function () {
    formulario.reset();
});

// ANIMAÇÃO DE ENTRADA DOS SETORES
const setores = document.querySelectorAll(".setor");

setores.forEach(function (setor, posicao) {
    setor.classList.add("escondido");

    setTimeout(function () {
        setor.classList.remove("escondido");
    }, posicao * 120);
});