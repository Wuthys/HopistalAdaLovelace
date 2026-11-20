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
            <a href="painel.php" class="item">
                <img src="../imagens_do_projeto/dashboard_cinza.svg" alt="">
                <span>Painel</span>
            </a>
            <a href="escalas.php" class="item">
                <img src="../imagens_do_projeto/calendario_cinza.svg" alt="">
                <span>Escalas</span>
            </a>
            <a href="profissionais.php" class="item ativo">
                <img src="../imagens_do_projeto/equipe_branco.svg" alt="">
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
                <h1>Profissionais</h1>
                <p class="descricao">Enfermeiros, técnicos e auxiliares. Profissionais não são excluídos: são inativados para preservar o histórico.</p>
            </div>

            <a href="#" class="botao-novo" id="abrir-modal">
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

            

        </section>

        <p class="vazio" id="vazio" hidden>Nenhum profissional encontrado.</p>
    </main>

    <!-- JANELA NOVO PROFISSIONAL -->
    <dialog class="modal" id="modal-profissional" aria-labelledby="titulo-modal">
        <button type="button" class="modal-fechar" id="fechar-modal" aria-label="Fechar">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </button>

        <form class="modal-form" id="form-profissional" method="post" action="#">
            <h2 id="titulo-modal">Novo profissional</h2>

            <div class="form-grade">

                <div class="campo-form campo-largo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome">
                </div>

                <div class="campo-form">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf">
                </div>

                <div class="campo-form">
                    <label for="coren">COREN</label>
                    <input type="text" id="coren" name="coren">
                </div>

                <div class="campo-form">
                    <label for="situacao">Situação do registro</label>
                    <select id="situacao" name="situacao">
                        <option value="ativo">Ativo</option>
                        <option value="inativo">Inativo</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="categoria">Categoria profissional</label>
                    <select id="categoria" name="categoria">
                        <option value="">Selecione</option>
                        <option>Enfermeiro(a)</option>
                        <option>Técnico(a) de Enfermagem</option>
                        <option>Auxiliar de Enfermagem</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="setor">Setor de lotação</label>
                    <select id="setor" name="setor">
                        <option value="">Selecione</option>
                        <option>Centro Cirúrgico</option>
                        <option>Clínica Médica</option>
                        <option>Pronto-Socorro</option>
                        <option>UTI Adulto</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="jornada">Jornada de trabalho</label>
                    <select id="jornada" name="jornada">
                        <option>12x36</option>
                        <option>6h diárias</option>
                        <option>8h diárias</option>
                        <option>30h semanais</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="experiencia">Experiência (anos)</label>
                    <input type="number" id="experiencia" name="experiencia" value="0" min="0">
                </div>

                <div class="campo-form">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>

                <div class="campo-form campo-largo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>

                <fieldset class="grupo-chips">
                    <legend>Disponibilidade de turnos</legend>
                    <div class="chips">
                        <label class="chip"><input type="checkbox" name="turnos[]" value="diurno"><span>Diurno · 07h – 19h</span></label>
                        <label class="chip"><input type="checkbox" name="turnos[]" value="noturno"><span>Noturno · 19h – 07h</span></label>
                    </div>
                </fieldset>

                <fieldset class="grupo-chips">
                    <legend>Especializações e competências</legend>
                    <div class="chips">
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Terapia Intensiva"><span>Terapia Intensiva</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Urgência e Emergência"><span>Urgência e Emergência</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Centro Cirúrgico"><span>Centro Cirúrgico</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Pediatria"><span>Pediatria</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Obstetrícia"><span>Obstetrícia</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Oncologia"><span>Oncologia</span></label>
                        <label class="chip"><input type="checkbox" name="especializacoes[]" value="Cardiologia"><span>Cardiologia</span></label>
                    </div>
                </fieldset>

            </div>

            <div class="modal-rodape">
                <button type="button" class="botao-cancelar" id="cancelar-modal">Cancelar</button>
                <button type="submit" class="botao-salvar">Salvar cadastro</button>
            </div>
        </form>
    </dialog>

    <script src="../js/profissionais.js"></script>
</body>
</html>