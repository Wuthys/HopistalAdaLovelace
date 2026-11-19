<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <main class="tela">
        <!-- Nome do Hospital com frase -->
        <section class="marca">
            <h1>Hospital Ada Lovelace</h1>
            <h3>A escala certa, para cada plantão.</h3>
        </section>

        <!-- Login -->
        <section class="acesso">
            <form class="login" id="form-login" novalidate>
                <h4>ACESSO AO SISTEMA</h4>
                <h2>ENTRAR</h2>

                <div class="campo">
                    <label for="cpf-email">CPF/EMAIL</label>
                    <input type="text" name="cpf-email" id="cpf-email" autocomplete="username" aria-describedby="erro-cpf-email">
                    <p class="erro" id="erro-cpf-email" hidden></p>
                </div>

                <div class="campo">
                    <label for="senha">SENHA</label>
                    <input type="password" name="senha" id="senha" autocomplete="current-password" aria-describedby="erro-senha">
                    <p class="erro" id="erro-senha" hidden></p>
                </div>

                <button type="submit" class="botao">ENTRAR</button>
                <p class="status" id="status" role="status" hidden></p>

            </form>
        </section>
    </main>

    <script src="./js/index.js"></script>
</body>
</html>