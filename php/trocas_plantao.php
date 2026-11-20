<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Trocas de plantão</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- MENU LATERAL -->
    <header class="menu-lateral">
        <h2 class="logo">Hospital Ada Lovelace</h2>

        <nav class="menu">
            <a href="painel.php" class="item">
                <img src="../imagens_do_projeto/dashboard_cinza.svg" alt="">
                <span>Painel</span>
            </a>
            <a href="escalas.php" class="item">
                <img src="../imagens_do_projeto/calendario_cinza.svg" alt="">
                <span>Escalas</span>
            </a>
            <a href="profissionais.php" class="item">
                <img src="../imagens_do_projeto/equipe_cinza.svg" alt="">
                <span>Profissionais</span>
            </a>
            <a href="setores.php" class="item">
                <img src="../imagens_do_projeto/predio_cinza.svg" alt="">
                <span>Setores</span>
            </a>
            <a href="ferias_afastamentos.php" class="item">
                <img src="../imagens_do_projeto/aviao_cinza.svg" alt="">
                <span>Férias e Afastamentos</span>
            </a>
            <a href="trocas_plantao.php" class="item ativo">
                <img src="../imagens_do_projeto/trocas_branco.svg" alt="">
                <span>Trocas de plantão</span>
            </a>
            <a href="./historico.php" class="item">
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
                <span class="rotulo-topo">PLANTÕES</span>
                <h1>Trocas de plantão</h1>
            </div>

            <select class="filtro" id="filtro-status" aria-label="Filtrar por situação">
                <option value="pendente">Pendente</option>
                <option value="aceita">Aceita</option>
                <option value="recusada">Recusada</option>
                <option value="todas">Todas</option>
            </select>
        </section>

        <!-- LISTA DE TROCAS -->
        <section class="trocas-lista">

            <article class="troca" data-status="pendente">
                <div class="troca-topo">
                    <p class="troca-info">Centro Cirúrgico · solicitada em 29/09/2026 às 12:19</p>
                    <span class="situacao em-aprovacao">Pendente</span>
                </div>

                <div class="troca-pessoas">
                    <div>
                        <p class="troca-nome">Rodrigo Brito</p>
                        <p class="troca-data">sexta, 02/10 · Diurno</p>
                    </div>
                    <div class="troca-icone"><img src="../imagens_do_projeto/trocas_branco.svg" alt=""></div>
                    <div>
                        <p class="troca-nome">Aline Figueiredo</p>
                        <p class="troca-data">sábado, 03/10 · Diurno</p>
                    </div>
                </div>

                <p class="troca-motivo">“Estou viajando”</p>

                <form class="troca-acoes" method="post" action="#">
                    <input type="hidden" name="id_troca" value="1">
                    <input type="text" class="troca-obs" name="observacao" placeholder="Observação (opcional)" aria-label="Observação">
                    <button type="submit" name="acao" value="cancelar" class="botao-recusar">Cancelar</button>
                    <button type="submit" name="acao" value="aceitar" class="botao-registrar">
                        <img src="../imagens_do_projeto/confirmar_branco.svg" alt="">
                        <span>Aceitar troca</span>
                    </button>
                </form>
            </article>

            <article class="troca" data-status="aceita">
                <div class="troca-topo">
                    <p class="troca-info">Clínica Médica · solicitada em 30/09/2026 às 09:41</p>
                    <span class="situacao publicada">Aceita</span>
                </div>

                <div class="troca-pessoas">
                    <div>
                        <p class="troca-nome">Paula Andrade</p>
                        <p class="troca-data">terça, 06/10 · Noturno</p>
                    </div>
                    <div class="troca-icone"><img src="../imagens_do_projeto/trocas_branco.svg" alt=""></div>
                    <div>
                        <p class="troca-nome">Rafael Lima</p>
                        <p class="troca-data">quarta, 07/10 · Noturno</p>
                    </div>
                </div>

                <p class="troca-motivo">“Consulta médica”</p>

                <form class="troca-acoes" method="post" action="#">
                    <input type="hidden" name="id_troca" value="2">
                    <input type="text" class="troca-obs" name="observacao" placeholder="Observação do coordenador (opcional)" aria-label="Observação do coordenador">
                    <button type="submit" name="acao" value="recusar" class="botao-recusar">Recusar</button>
                    <button type="submit" name="acao" value="registrar" class="botao-registrar">
                        <img src="../imagens_do_projeto/confirmar_branco.svg" alt="">
                        <span>Registrar troca</span>
                    </button>
                </form>
            </article>

        </section>

        <p class="vazio" id="vazio" hidden>Nenhuma troca encontrada.</p>
    </main>

    <script src="../js/trocas_plantao.js"></script>
</body>
</html>