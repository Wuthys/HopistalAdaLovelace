<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Férias e Afastamentos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- MENU LATERAL -->
    <header class="menu-lateral">
        <h2 class="logo">Hospital Ada Lovelace</h2>

        <nav class="menu">
            <a href="./painel.php" class="item">
                <img src="../imagens_do_projeto/dashboard_cinza.svg" alt="">
                <span>Painel</span>
            </a>
            <a href="./escalas.php" class="item">
                <img src="../imagens_do_projeto/calendario_cinza.svg" alt="">
                <span>Escalas</span>
            </a>
            <a href="./profissionais.php" class="item">
                <img src="../imagens_do_projeto/equipe_cinza.svg" alt="">
                <span>Profissionais</span>
            </a>
            <a href="./setores.php" class="item">
                <img src="../imagens_do_projeto/predio_cinza.svg" alt="">
                <span>Setores</span>
            </a>
            <a href="./ferias_afastamentos.php" class="item ativo">
                <img src="../imagens_do_projeto/aviao_branco.svg" alt="">
                <span>Férias e Afastamentos</span>
            </a>
            <a href="./trocas_plantao.php" class="item">
                <img src="../imagens_do_projeto/trocas_cinza.svg" alt="">
                <span>Trocas de plantão</span>
            </a>
            <a href="#" class="item">
                <img src="../imagens_do_projeto/historico_cinza.svg" alt="">
                <span>Histórico</span>
            </a>
        </nav>

        <!-- USUÁRIO LOGADO -->
        <div class="usuario">
            <div class="sigla">RA</div>
            <div class="usuario-info">
                <p class="usuario-nome">Ricardo Almeida</p>
                <p class="usuario-funcao">Coordenador geral</p>
            </div>
            <a href="login.php" class="sair" title="Sair">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <path d="m16 17 5-5-5-5"/>
                    <path d="M21 12H9"/>
                </svg>
            </a>
        </div>
    </header>

    <main class="conteudo">

        <!-- CABEÇALHO -->
        <section class="cabecalho">
            <div>
                <span class="rotulo-topo">CADASTROS</span>
                <h1>Férias e Afastamentos</h1>
            </div>

            <div class="cabecalho-acoes">
                <select class="filtro" id="filtro-tipo" aria-label="Filtrar por tipo">
                    <option value="">Todos os tipos</option>
                    <option>Férias</option>
                    <option>Afastamento</option>
                    <option>Licença</option>
                    <option>Solicitação de folga</option>
                </select>

                <a href="#" class="botao-novo" id="abrir-modal">
                    <img src="../imagens_do_projeto/mais_branco.svg" alt="">
                    <span>Registrar</span>
                </a>
            </div>
        </section>

        <!-- LISTA DE REGISTROS -->
        <section class="registros">

            <article class="registro" data-tipo="Afastamento">
                <div class="registro-pessoa">
                    <div class="avatar">MV</div>
                    <div>
                        <p class="registro-nome">Marcelo Vieira</p>
                        <p class="registro-motivo">Atestado médico</p>
                    </div>
                </div>
                <span class="tipo">Afastamento</span>
                <span class="periodo">01 de out — 03 de out</span>
                <button type="button" class="acao" title="Excluir"><img src="../imagens_do_projeto/lixeira_cinza.svg" alt="Excluir"></button>
            </article>

            <article class="registro" data-tipo="Férias">
                <div class="registro-pessoa">
                    <div class="avatar">CR</div>
                    <div>
                        <p class="registro-nome">Camila Rocha</p>
                        <p class="registro-motivo">Férias regulamentares</p>
                    </div>
                </div>
                <span class="tipo">Férias</span>
                <span class="periodo">28 de set — 12 de out</span>
                <button type="button" class="acao" title="Excluir"><img src="../imagens_do_projeto/lixeira_cinza.svg" alt="Excluir"></button>
            </article>

        </section>

        <p class="vazio" id="vazio" hidden>Nenhum registro encontrado.</p>
    </main>

    <!-- JANELA REGISTRAR -->
    <dialog class="modal modal-estreito" id="modal-registro" aria-labelledby="titulo-modal">
        <button type="button" class="modal-fechar" id="fechar-modal" aria-label="Fechar">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </button>

        <form class="modal-form" id="form-registro" method="post" action="#">
            <h2 id="titulo-modal">Registrar férias ou afastamento</h2>

            <div class="form-grade">

                <div class="campo-form campo-largo">
                    <label for="profissional">Profissional</label>
                    <select id="profissional" name="profissional" autofocus>
                        <option value="">Selecione</option>
                        <option>Aline Figueiredo</option>
                        <option>Ana Beatriz Souza</option>
                        <option>Bianca Leal</option>
                        <option>Camila Rocha</option>
                        <option>Carlos Menezes</option>
                        <option>Marcelo Vieira</option>
                    </select>
                </div>

                <div class="campo-form campo-largo">
                    <label for="tipo">Tipo</label>
                    <select id="tipo" name="tipo">
                        <option>Férias</option>
                        <option>Afastamento</option>
                        <option>Licença</option>
                        <option>Solicitação de folga</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="inicio">Início</label>
                    <input type="date" id="inicio" name="inicio">
                </div>

                <div class="campo-form">
                    <label for="fim">Fim</label>
                    <input type="date" id="fim" name="fim">
                </div>

                <div class="campo-form campo-largo">
                    <label for="motivo">Motivo / observação</label>
                    <input type="text" id="motivo" name="motivo">
                </div>

            </div>

            <div class="modal-rodape">
                <button type="button" class="botao-cancelar" id="cancelar-modal">Cancelar</button>
                <button type="submit" class="botao-salvar">Registrar</button>
            </div>
        </form>
    </dialog>

    <script src="../js/ferias_afastemanto.js"></script>
</body>
</html>