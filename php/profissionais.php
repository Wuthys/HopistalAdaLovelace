<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Profissionais</title>
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
            <a href="./profissionais.php" class="item ativo">
                <img src="../imagens_do_projeto/equipe_branco.svg" alt="">
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
                <span class="rotulo-topo">CADASTROS</span>
                <h1>Profissionais</h1>
                <p class="descricao">Enfermeiros, técnicos e auxiliares. Profissionais não são excluídos: são inativados para preservar o histórico.</p>
            </div>

            <a href="#" class="botao-novo">
                <img src="../imagens_do_projeto/mais_branco.svg" alt="">
                <span>Novo profissional</span>
            </a>
        </section>

        <!-- FILTROS -->
        <section class="filtros">
            <label class="busca">
                <img src="../imagens_do_projeto/busca_cinza.svg" alt="">
                <input type="text" id="busca" placeholder="Buscar por nome ou COREN">
            </label>

            <select id="filtro-setor" aria-label="Filtrar por setor">
                <option value="">Todos os setores</option>
                <option>Centro Cirúrgico</option>
                <option>Clínica Médica</option>
                <option>Pronto-Socorro</option>
                <option>UTI Adulto</option>
            </select>

            <select id="filtro-cargo" aria-label="Filtrar por cargo">
                <option value="">Todos os cargos</option>
                <option>Enfermeiro(a)</option>
                <option>Técnico(a) de Enfermagem</option>
                <option>Auxiliar de Enfermagem</option>
            </select>

            <select id="filtro-situacao" aria-label="Filtrar por situação">
                <option value="ativo">Ativos</option>
                <option value="inativo">Inativos</option>
                <option value="todos">Todos</option>
            </select>
        </section>

        <!-- LISTA DE PROFISSIONAIS -->
        <p class="contagem"><span id="total">0</span> <span id="texto-total">profissionais</span></p>

        <section class="lista">

            <article class="profissional" data-setor="Centro Cirúrgico" data-cargo="Técnico(a) de Enfermagem" data-situacao="ativo">
                <div class="prof-pessoa">
                    <div class="avatar">AF</div>
                    <div>
                        <p class="prof-nome">Aline Figueiredo</p>
                        <p class="prof-cargo">Técnico(a) de Enfermagem</p>
                    </div>
                </div>
                <div>
                    <p class="dado-rotulo">Setor</p>
                    <p class="dado-valor">Centro Cirúrgico</p>
                </div>
                <div>
                    <p class="dado-rotulo">COREN</p>
                    <p class="dado-valor"><span class="prof-coren">COREN-SP 244384</span> · <span class="status-ativo">Ativo</span></p>
                </div>
                <div>
                    <p class="dado-rotulo">Jornada</p>
                    <p class="dado-valor">12x36 · diurno</p>
                </div>
                <div>
                    <p class="dado-rotulo">Especialização</p>
                    <p class="dado-valor">Centro Cirúrgico</p>
                </div>
                <div class="acoes">
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                    <button type="button" class="acao" title="Inativar"><img src="../imagens_do_projeto/inativar_cinza.svg" alt="Inativar"></button>
                </div>
            </article>

            <article class="profissional" data-setor="UTI Adulto" data-cargo="Enfermeiro(a)" data-situacao="ativo">
                <div class="prof-pessoa">
                    <div class="avatar">AB</div>
                    <div>
                        <p class="prof-nome">Ana Beatriz Souza</p>
                        <p class="prof-cargo">Enfermeiro(a) · Assistencial</p>
                    </div>
                </div>
                <div>
                    <p class="dado-rotulo">Setor</p>
                    <p class="dado-valor">UTI Adulto</p>
                </div>
                <div>
                    <p class="dado-rotulo">COREN</p>
                    <p class="dado-valor"><span class="prof-coren">COREN-SP 240137</span> · <span class="status-ativo">Ativo</span></p>
                </div>
                <div>
                    <p class="dado-rotulo">Jornada</p>
                    <p class="dado-valor">12x36 · diurno</p>
                </div>
                <div>
                    <p class="dado-rotulo">Especialização</p>
                    <p class="dado-valor">Terapia Intensiva</p>
                </div>
                <div class="acoes">
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                    <button type="button" class="acao" title="Inativar"><img src="../imagens_do_projeto/inativar_cinza.svg" alt="Inativar"></button>
                </div>
            </article>

            <article class="profissional" data-setor="Pronto-Socorro" data-cargo="Enfermeiro(a)" data-situacao="ativo">
                <div class="prof-pessoa">
                    <div class="avatar">BL</div>
                    <div>
                        <p class="prof-nome">Bianca Leal</p>
                        <p class="prof-cargo">Enfermeiro(a) · Coordenador</p>
                    </div>
                </div>
                <div>
                    <p class="dado-rotulo">Setor</p>
                    <p class="dado-valor">Pronto-Socorro</p>
                </div>
                <div>
                    <p class="dado-rotulo">COREN</p>
                    <p class="dado-valor"><span class="prof-coren">COREN-SP 260522</span> · <span class="status-ativo">Ativo</span></p>
                </div>
                <div>
                    <p class="dado-rotulo">Jornada</p>
                    <p class="dado-valor">12x36 · diurno</p>
                </div>
                <div>
                    <p class="dado-rotulo">Especialização</p>
                    <p class="dado-valor">Urgência e Emergência</p>
                </div>
                <div class="acoes">
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                    <button type="button" class="acao" title="Inativar"><img src="../imagens_do_projeto/inativar_cinza.svg" alt="Inativar"></button>
                </div>
            </article>

            <article class="profissional" data-setor="Clínica Médica" data-cargo="Auxiliar de Enfermagem" data-situacao="ativo">
                <div class="prof-pessoa">
                    <div class="avatar">CM</div>
                    <div>
                        <p class="prof-nome">Carlos Menezes</p>
                        <p class="prof-cargo">Auxiliar de Enfermagem</p>
                    </div>
                </div>
                <div>
                    <p class="dado-rotulo">Setor</p>
                    <p class="dado-valor">Clínica Médica</p>
                </div>
                <div>
                    <p class="dado-rotulo">COREN</p>
                    <p class="dado-valor"><span class="prof-coren">COREN-SP 231908</span> · <span class="status-ativo">Ativo</span></p>
                </div>
                <div>
                    <p class="dado-rotulo">Jornada</p>
                    <p class="dado-valor">12x36 · noturno</p>
                </div>
                <div>
                    <p class="dado-rotulo">Especialização</p>
                    <p class="dado-valor">Cuidados Paliativos</p>
                </div>
                <div class="acoes">
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                    <button type="button" class="acao" title="Inativar"><img src="../imagens_do_projeto/inativar_cinza.svg" alt="Inativar"></button>
                </div>
            </article>

            <article class="profissional" data-setor="UTI Adulto" data-cargo="Técnico(a) de Enfermagem" data-situacao="inativo">
                <div class="prof-pessoa">
                    <div class="avatar">DM</div>
                    <div>
                        <p class="prof-nome">Débora Martins</p>
                        <p class="prof-cargo">Técnico(a) de Enfermagem</p>
                    </div>
                </div>
                <div>
                    <p class="dado-rotulo">Setor</p>
                    <p class="dado-valor">UTI Adulto</p>
                </div>
                <div>
                    <p class="dado-rotulo">COREN</p>
                    <p class="dado-valor"><span class="prof-coren">COREN-SP 198776</span> · <span class="status-inativo">Inativo</span></p>
                </div>
                <div>
                    <p class="dado-rotulo">Jornada</p>
                    <p class="dado-valor">12x36 · noturno</p>
                </div>
                <div>
                    <p class="dado-rotulo">Especialização</p>
                    <p class="dado-valor">Terapia Intensiva</p>
                </div>
                <div class="acoes">
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                    <button type="button" class="acao" title="Inativar"><img src="../imagens_do_projeto/inativar_cinza.svg" alt="Inativar"></button>
                </div>
            </article>

        </section>

        <p class="vazio" id="vazio" hidden>Nenhum profissional encontrado.</p>
    </main>

    <script src="../js/profissionais.js"></script>
</body>
</html>