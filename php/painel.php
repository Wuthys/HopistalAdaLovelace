<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantão - Painel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- ================= MENU LATERAL ================= -->
    <header class="menu-lateral">
        <h2 class="logo">Hospital Ada Lovelace</h2>

        <nav class="menu">
            <a href="./painel.php" class="item ativo">
                <img src="../imagens_do_projeto/dashboard_branco.svg" alt="">
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
            <a href="#" class="item">
                <img src="../imagens_do_projeto/historico_cinza.svg" alt="">
                <span>Histórico</span>
            </a>
        </nav>

        <!-- Usuário logado (depois o PHP preenche com os dados do banco) -->
        <div class="usuario">
            <div class="sigla">RA</div> <!-- PHP: iniciais do profissional -->
            <div class="usuario-info">
                <p class="usuario-nome">Ricardo Almeida</p>      <!-- PHP: nome -->
                <p class="usuario-funcao">Coordenador geral</p>  <!-- PHP: função -->
            </div>
            <a href="#" class="sair" title="Sair">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <path d="m16 17 5-5-5-5"/>
                    <path d="M21 12H9"/>
                </svg>
            </a>
        </div>
    </header>

    <!-- ================= CONTEÚDO ================= -->
    <main class="conteudo">
        <p class="rotulo">Painel</p>
        <h1>Olá, Dr. Ricardo Almeida</h1> <!-- PHP: nome do profissional -->

        <!-- Cartões com números (data-valor é o número final da animação) -->
        <section class="cartoes">
            <article class="cartao">
                <p class="numero" data-valor="39">39</p>
                <p class="cartao-texto">Profissionais ativos</p>
            </article>
            <article class="cartao">
                <p class="numero" data-valor="4">4</p>
                <p class="cartao-texto">Setores</p>
            </article>
            <article class="cartao">
                <p class="numero" data-valor="1">1</p>
                <p class="cartao-texto">Escalas em aprovação</p>
            </article>
            <article class="cartao">
                <p class="numero" data-valor="1">1</p>
                <p class="cartao-texto">Trocas pendentes</p>
            </article>
        </section>

        <section class="grade">
            <div class="coluna-esquerda">

                <!-- Escala mais recente -->
                <article class="caixa">
                    <p class="titulo-caixa">Escala mais recente</p>
                    <div class="escala">
                        <div>
                            <h3 class="escala-nome">Escala de Outubro</h3>    <!-- PHP: nome da escala -->
                            <p class="escala-datas">01 de out - 31 de out</p> <!-- PHP: período -->
                        </div>
                        <span class="selo">Em aprovação</span>                <!-- PHP: status -->
                    </div>
                </article>

                <!-- Fluxo da escala atual (data-etapa = etapa em que a escala está, de 1 a 5) -->
                <article class="caixa">
                    <p class="titulo-caixa">Fluxo da escala atual</p>
                    <div class="fluxo" id="fluxo" data-etapa="3">
                        <div class="trilho">
                            <div class="trilho-preenchido" id="trilho-preenchido"></div>
                        </div>
                        <ol class="etapas">
                            <li class="etapa"><span class="ponto"></span><span class="etapa-nome">Cadastros</span></li>
                            <li class="etapa"><span class="ponto"></span><span class="etapa-nome">Geração e ajustes</span></li>
                            <li class="etapa"><span class="ponto"></span><span class="etapa-nome">Aprovação da Coordenação</span></li>
                            <li class="etapa"><span class="ponto"></span><span class="etapa-nome">Aprovada</span></li>
                            <li class="etapa"><span class="ponto"></span><span class="etapa-nome">Publicada</span></li>
                        </ol>
                    </div>
                </article>

            </div>

            <!-- Férias e afastamentos (o PHP pode repetir cada <li> com um while/foreach) -->
            <aside class="caixa">
                <p class="titulo-caixa">Férias e afastamentos</p>
                <ul class="ausencias">
                    <li class="ausencia">
                        <div class="sigla">CR</div>
                        <div>
                            <p class="ausencia-nome">Camila Rocha</p>
                            <p class="ausencia-info">Férias · 28 de set - 12 de out</p>
                        </div>
                    </li>
                    <li class="ausencia">
                        <div class="sigla">MV</div>
                        <div>
                            <p class="ausencia-nome">Marcelo Vieira</p>
                            <p class="ausencia-info">Afastamento · 01 de out - 03 de out</p>
                        </div>
                    </li>
                </ul>
                <!-- Se não houver ninguém, o PHP pode mostrar: <p class="vazio">Nenhuma ausência prevista.</p> -->
            </aside>
        </section>
    </main>

    <script src="../js/painel.js"></script>
</body>
</html>