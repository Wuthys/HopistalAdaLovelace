<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Escalas</title>
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
            <a href="./escalas.php" class="item ativo">
                <img src="../imagens_do_projeto/calendario_branco.svg" alt="">
                <span>Escalas</span>
            </a>
            <a href="./profissionais.php" class="item">
                <img src="../imagens_do_projeto/equipe_cinza.svg" alt="">
                <span>Profissionais</span>
            </a>
            <a href="#" class="item">
                <img src="../imagens_do_projeto/predio_cinza.svg" alt="">
                <span>Setores</span>
            </a>
            <a href="#" class="item">
                <img src="../imagens_do_projeto/aviao_cinza.svg" alt="">
                <span>Férias e Afastamentos</span>
            </a>
            <a href="#" class="item">
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
            <a href="../html/login.html" class="sair" title="Sair">
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
                <span class="rotulo-topo">ELABORAÇÃO</span>
                <h1>Escalas</h1>
                <p class="descricao">Cada coordenador elabora a escala do seu setor. A coordenação geral acompanha, aprova e publica.</p>
            </div>

            <select class="filtro" aria-label="Filtrar por situação">
                <option>Todas as situações</option>
                <option>Rascunho</option>
                <option>Em aprovação</option>
                <option>Publicada</option>
            </select>
        </section>

        <!-- LISTA DE ESCALAS -->
        <section class="lista">

            <a href="#" class="escala-item">
                <div>
                    <h3 class="escala-titulo">Escala Clínica Médica — 16/11 a 22/11</h3>
                    <p class="escala-info">Clínica Médica · 16 de nov — 22 de nov 2026 · versão 1 · por Larissa Monteiro</p>
                </div>
                <div class="escala-lado">
                    <span class="plantoes">35 plantões</span>
                    <span class="situacao em-aprovacao">Em aprovação</span>
                    <svg class="seta" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </a>

            <a href="#" class="escala-item">
                <div>
                    <h3 class="escala-titulo">Escala Clínica Médica — 05/10 a 11/10</h3>
                    <p class="escala-info">Clínica Médica · 05 de out — 11 de out 2026 · versão 1 · por Larissa Monteiro</p>
                </div>
                <div class="escala-lado">
                    <span class="plantoes">35 plantões</span>
                    <span class="situacao rascunho">Rascunho</span>
                    <svg class="seta" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </a>

            <a href="#" class="escala-item">
                <div>
                    <h3 class="escala-titulo">Escala 28/09 a 04/10</h3>
                    <p class="escala-info">— · 28 de set — 04 de out 2026 · versão 1 · por Enf. Helena Duarte</p>
                </div>
                <div class="escala-lado">
                    <span class="alerta">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B4531A" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        4
                    </span>
                    <span class="plantoes">108 plantões</span>
                    <span class="situacao publicada">Publicada</span>
                    <svg class="seta" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </a>

            <a href="#" class="escala-item">
                <div>
                    <h3 class="escala-titulo">Escala de Outubro</h3>
                    <p class="escala-info">Clínica Médica · 01 de out — 31 de out 2026 · versão 1 · por Larissa Monteiro</p>
                </div>
                <div class="escala-lado">
                    <span class="plantoes">140 plantões</span>
                    <span class="situacao publicada">Publicada</span>
                    <svg class="seta" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </a>

        </section>
    </main>

</body>
</html>