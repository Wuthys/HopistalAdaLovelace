<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Histórico</title>
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
            <a href="./ferias_afastamentos.php" class="item">
                <img src="../imagens_do_projeto/aviao_cinza.svg" alt="">
                <span>Férias e Afastamentos</span>
            </a>
            <a href="./trocas_plantao.php" class="item">
                <img src="../imagens_do_projeto/trocas_cinza.svg" alt="">
                <span>Trocas de plantão</span>
            </a>
            <a href=./historico.php" class="item ativo">
                <img src="../imagens_do_projeto/historico_branco.svg" alt="">
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
                <span class="rotulo-topo">AUDITORIA</span>
                <h1>Histórico</h1>
            </div>
        </section>

        <!-- FILTROS -->
        <section class="filtros filtros-historico">
            <label class="busca">
                <img src="../imagens_do_projeto/busca_cinza.svg" alt="">
                <input type="text" id="busca" placeholder="Buscar no histórico">
            </label>

            <select id="filtro-categoria" aria-label="Filtrar por tipo de registro">
                <option value="">Todos os registros</option>
                <option value="escala">Escala</option>
                <option value="profissional">Profissional</option>
                <option value="setor">Setor</option>
                <option value="troca">Troca de plantão</option>
            </select>
        </section>

        <!-- LINHA DO TEMPO -->
        <section class="historico-caixa">
            <ol class="linha-tempo">

                <li class="evento" data-categoria="profissional">
                    <div>
                        <p class="evento-titulo">Profissional reativado</p>
                        <p class="evento-desc">Aline Figueiredo — histórico preservado</p>
                        <p class="evento-meta">Coordenação geral · Coordenação geral · Profissional</p>
                    </div>
                    <span class="evento-data">09/11/2026 às 12:54</span>
                </li>

                <li class="evento" data-categoria="escala">
                    <div>
                        <p class="evento-titulo">Escala enviada para aprovação</p>
                        <p class="evento-desc">Escala Clínica Médica — 16/11 a 22/11 — 0 inconsistências pendentes</p>
                        <p class="evento-meta">Larissa Monteiro · Coordenador de setor · Escala</p>
                    </div>
                    <span class="evento-data">09/11/2026 às 12:24</span>
                </li>

                <li class="evento" data-categoria="escala">
                    <div>
                        <p class="evento-titulo">Escala gerada</p>
                        <p class="evento-desc">Escala Clínica Médica — 16/11 a 22/11: 35 alocações, 0 inconsistências</p>
                        <p class="evento-meta">Larissa Monteiro · Coordenador de setor · Escala</p>
                    </div>
                    <span class="evento-data">09/11/2026 às 12:23</span>
                </li>

                <li class="evento" data-categoria="escala">
                    <div>
                        <p class="evento-titulo">Remanejamento excepcional registrado</p>
                        <p class="evento-desc">Bruno Carvalho: UTI Adulto → Pronto-Socorro em 14 de out</p>
                        <p class="evento-meta">Coordenação geral · Coordenação geral · Escala</p>
                    </div>
                    <span class="evento-data">01/10/2026 às 12:06</span>
                </li>

            </ol>

            <p class="vazio" id="vazio" hidden>Nenhum registro encontrado.</p>
        </section>
    </main>

    <script src="../js/historico.js"></script>
</body>
</html>