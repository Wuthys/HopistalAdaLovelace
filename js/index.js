const form = document.getElementById("form-login");
const campoLogin = document.getElementById("cpf-email");
const campoSenha = document.getElementById("senha");
const perfil = document.getElementById("perfil");
const status = document.getElementById("status");

const SENHA_MINIMA = 6;

/* ---------- Funções de apoio ---------- */
function soDigitos(valor) {
    return valor.replace(/\D/g, "");
}

function formatarCpf(valor) {
    return soDigitos(valor)
        .slice(0, 11)
        .replace(/(\d{3})(\d)/, "$1.$2")
        .replace(/(\d{3})(\d)/, "$1.$2")
        .replace(/(\d{3})(\d{1,2})$/, "$1-$2");
}

function cpfValido(valor) {
    const cpf = soDigitos(valor);

    // 11 dígitos e não pode ser sequência repetida (111.111.111-11 etc.)
    if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) return false;

    // Confere os dois dígitos verificadores
    for (let t = 9; t < 11; t++) {
        let soma = 0;
        for (let i = 0; i < t; i++) {
            soma += Number(cpf[i]) * (t + 1 - i);
        }
        const digito = ((soma * 10) % 11) % 10;
        if (digito !== Number(cpf[t])) return false;
    }
    return true;
}

function emailValido(valor) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(valor);
}

/* ---------- Mensagens de erro ---------- */
function mostrarErro(campo, mensagem) {
    const aviso = document.getElementById("erro-" + campo.id);
    aviso.textContent = mensagem;
    aviso.hidden = false;
    campo.setAttribute("aria-invalid", "true");
}

function limparErro(campo) {
    const aviso = document.getElementById("erro-" + campo.id);
    aviso.textContent = "";
    aviso.hidden = true;
    campo.removeAttribute("aria-invalid");
}

/* ---------- Validações de cada campo ---------- */
function validarLogin() {
    const valor = campoLogin.value.trim();

    if (!valor) {
        mostrarErro(campoLogin, "Informe seu CPF ou e-mail.");
        return false;
    }

    if (valor.includes("@")) {
        if (!emailValido(valor)) {
            mostrarErro(campoLogin, "Digite um e-mail válido, como nome@hospital.com.");
            return false;
        }
    } else if (!cpfValido(valor)) {
        mostrarErro(campoLogin, "CPF inválido. Confira os 11 números.");
        return false;
    }

    limparErro(campoLogin);
    return true;
}

function validarSenha() {
    const valor = campoSenha.value;

    if (!valor) {
        mostrarErro(campoSenha, "Informe sua senha.");
        return false;
    }

    if (valor.length < SENHA_MINIMA) {
        mostrarErro(campoSenha, `A senha deve ter pelo menos ${SENHA_MINIMA} caracteres.`);
        return false;
    }

    limparErro(campoSenha);
    return true;
}

/* ---------- Eventos ---------- */

// Máscara de CPF enquanto digita (só se o texto for numérico)
campoLogin.addEventListener("input", () => {
    const valor = campoLogin.value;
    if (/^[\d.\-]+$/.test(valor)) {
        campoLogin.value = formatarCpf(valor);
    }
    if (campoLogin.hasAttribute("aria-invalid")) validarLogin();
});

campoSenha.addEventListener("input", () => {
    if (campoSenha.hasAttribute("aria-invalid")) validarSenha();
});

campoLogin.addEventListener("blur", () => {
    if (campoLogin.value) validarLogin();
});

campoSenha.addEventListener("blur", () => {
    if (campoSenha.value) validarSenha();
});

form.addEventListener("submit", (evento) => {
    evento.preventDefault();
    status.hidden = true;

    const loginOk = validarLogin();
    const senhaOk = validarSenha();

    if (!loginOk) {
        campoLogin.focus();
        return;
    }
    if (!senhaOk) {
        campoSenha.focus();
        return;
    }

    // Dados válidos: aqui entra o envio para o servidor (fetch/redirecionamento).
    const nomePerfil = perfil.options[perfil.selectedIndex].text;
    status.textContent = `Dados válidos. Entrando como ${nomePerfil}...`;
    status.hidden = false;
});