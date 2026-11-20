<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Ada Lovelace - Setores</title>
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
            <a href="./setores.php" class="item ativo">
                <img src="../imagens_do_projeto/predio_branco.svg" alt="">
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
                <h1>Setores</h1>
            </div>

            <a href="#" class="botao-novo" id="abrir-modal">
                <img src="../imagens_do_projeto/mais_branco.svg" alt="">
                <span>Novo setor</span>
            </a>
        </section>

        <!-- LISTA DE SETORES -->
        <section class="setores-grade">

            <article class="setor">
                <div class="setor-topo">
                    <h3 class="setor-nome">Centro Cirúrgico</h3>
                    <a href="#" class="acao" title="Editar"><img src="../imagens_do_projeto/editar_cinza.svg" alt="Editar"></a>
                </div>
                <p class="setor-coord"><img src="../imagens_do_projeto/coordenador_cinza.svg" alt="">Tatiane Correia · 5 profissionais</p>
                <p class="setor-desc">Cirurgias eletivas, 4 salas.</p>
                <span class="setor-exige">Exige: Centro Cirúrgico</span>
                <div class="setor-turnos">
                    <div>
                        <p class="turno-titulo"><img src="../imagens_do_projeto/sol_cinza.svg" alt="">Diurno</p>
                        <div class="turno-qtd"><span class="qtd">1 ENF</span><span class="qtd">1 TEC</span></div>
                    </div>
                    <div>
                        <p class="turno-titulo"><img src="../imagens_do_projeto/lua_cinza.svg" alt="">Noturno</p>
                        <p class="sem-necessidade">Sem necessidade</p>
                    </div>
                </div>
            </article>

        </section>
    </main>

    <!-- JANELA NOVO SETOR -->
    <dialog class="modal" id="modal-setor" aria-labelledby="titulo-modal">
        <button type="button" class="modal-fechar" id="fechar-modal" aria-label="Fechar">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5B6463" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </button>

        <form class="modal-form" id="form-setor" method="post" action="#">
            <h2 id="titulo-modal">Novo setor</h2>

            <div class="form-grade">

                <div class="campo-form">
                    <label for="nome-setor">Nome do setor</label>
                    <input type="text" id="nome-setor" name="nome" autofocus>
                </div>

                <div class="campo-form">
                    <label for="coordenador">Coordenador do setor (RF22)</label>
                    <select id="coordenador" name="coordenador">
                        <option value="">Sem coordenador</option>
                        <option>Tatiane Correia</option>
                        <option>Larissa Monteiro</option>
                        <option>Bianca Leal</option>
                        <option>Mateus Sampaio</option>
                    </select>
                </div>

                <div class="campo-form campo-largo">
                    <label for="especializacao">Especialização exigida</label>
                    <select id="especializacao" name="especializacao">
                        <option value="">Nenhuma</option>
                        <option>Terapia Intensiva</option>
                        <option>Urgência e Emergência</option>
                        <option>Centro Cirúrgico</option>
                        <option>Pediatria</option>
                        <option>Obstetrícia</option>
                        <option>Oncologia</option>
                        <option>Cardiologia</option>
                    </select>
                </div>

                <div class="campo-form campo-largo">
                    <label for="caracteristicas">Características do setor</label>
                    <textarea id="caracteristicas" name="caracteristicas"></textarea>
                </div>

                <fieldset class="grupo-chips">
                    <legend>Necessidade de profissionais por turno</legend>
                    <div class="tabela-caixa">
                        <table class="tabela-turnos">
                            <thead>
                                <tr>
                                    <th>Turno</th>
                                    <th>Enfermeiro(a)</th>
                                    <th>Técnico(a)</th>
                                    <th>Auxiliar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Diurno</td>
                                    <td><input type="number" name="diurno_enf" value="0" min="0" aria-label="Enfermeiros no turno diurno"></td>
                                    <td><input type="number" name="diurno_tec" value="0" min="0" aria-label="Técnicos no turno diurno"></td>
                                    <td><input type="number" name="diurno_aux" value="0" min="0" aria-label="Auxiliares no turno diurno"></td>
                                </tr>
                                <tr>
                                    <td>Noturno</td>
                                    <td><input type="number" name="noturno_enf" value="0" min="0" aria-label="Enfermeiros no turno noturno"></td>
                                    <td><input type="number" name="noturno_tec" value="0" min="0" aria-label="Técnicos no turno noturno"></td>
                                    <td><input type="number" name="noturno_aux" value="0" min="0" aria-label="Auxiliares no turno noturno"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>

            </div>

            <div class="modal-rodape">
                <button type="button" class="botao-cancelar" id="cancelar-modal">Cancelar</button>
                <button type="submit" class="botao-salvar">Salvar setor</button>
            </div>
        </form>
    </dialog>

    <script src="../js/setores.js"></script>
</body>
</html>