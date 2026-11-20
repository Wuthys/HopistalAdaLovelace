// JANELA REGISTRAR
const janela = document.getElementById("modal-registro");
const formulario = document.getElementById("form-registro");
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

// FILTRAR POR TIPO
const filtroTipo = document.getElementById("filtro-tipo");
const registros = document.querySelectorAll(".registro");
const mensagemVazia = document.getElementById("vazio");

filtroTipo.addEventListener("change", function () {
    let visiveis = 0;

    registros.forEach(function (registro) {
        const combina = filtroTipo.value === "" || filtroTipo.value === registro.dataset.tipo;

        registro.hidden = !combina;

        if (combina) {
            visiveis++;
        }
    });

    mensagemVazia.hidden = visiveis !== 0;
});