<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastrar Startup</title>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../CSS/teste3.css">
  <script src="../JS/teste3.js" defer></script>
</head>
<body>

  <button class="trigger-btn" onclick="openModal()">Abrir Modal — Cadastrar Startup</button>

  <!-- ══════════════════════════════════════════
       OVERLAY
  ══════════════════════════════════════════ -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-modal="true">

      <!-- ── HEADER ── -->
      <header class="modal-header">
        <div class="header-title">
          <!--
            Ícone do header: fill="white" definido via ATRIBUTO no SVG,
            não via CSS — assim não vaza para outros SVGs da página.
          -->
          <svg width="30" height="30" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill="white" d="M16 2c4.5 0 11 4.5 11 13 0 3.5-1.8 7-5.5 9l-1.5-3c2-1.2 3.5-3.5 3.5-6
                     0-5.5-3.5-9.5-7.5-9.5S9 9.5 9 15c0 2.5 1.5 4.8 3.5 6l-1.5 3C7.8 22 6 18.5 6 15
                     6 6.5 11.5 2 16 2z"/>
            <ellipse fill="white" cx="10.5" cy="21" rx="2.8" ry="4.5"/>
            <ellipse fill="white" cx="21.5" cy="21" rx="2.8" ry="4.5"/>
            <circle fill="#2F3C54" cx="16" cy="15" r="2.5"/>
          </svg>
          <h1 id="modalTitle">Cadastrar Startups</h1>
        </div>

        <button class="close-btn" onclick="closeModal()" aria-label="Fechar modal">
          <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill="#E6EFFF" d="M18.3 5.71a1 1 0 0 0-1.42 0L12 10.59 7.12 5.71a1 1 0 1 0-1.42 1.42
                     L10.59 12l-4.89 4.88a1 1 0 1 0 1.42 1.42L12 13.41l4.88 4.89a1 1 0 0 0
                     1.42-1.42L13.41 12l4.89-4.88a1 1 0 0 0 0-1.41z"/>
          </svg>
        </button>
      </header>

      <!-- ── CONTEÚDO ── -->
      <div class="modal-content">

        <!-- Stepper -->
        <nav class="stepper" aria-label="Etapas do cadastro">
          <div class="step">
            <span class="step-circle active" aria-current="step">1</span>
            <span class="step-label active">Dados da Startup</span>
          </div>
          <div class="step-line" aria-hidden="true"></div>
          <div class="step">
            <span class="step-circle inactive">2</span>
            <span class="step-label inactive">Localização &amp; Programa</span>
          </div>
          <div class="step-line" aria-hidden="true"></div>
          <div class="step">
            <span class="step-circle inactive">3</span>
            <span class="step-label inactive">Questionário</span>
          </div>
        </nav>

        <p class="subtitle">Preencha as informações para cadastrar uma startup no sistema.</p>

        <!-- ── FORMULÁRIO ── -->
        <form id="startupForm" novalidate>
          <div class="columns">

            <!-- ════════════════════════════
                 COLUNA 1 — DADOS DA STARTUP
            ════════════════════════════ -->
            <section class="card" aria-labelledby="col1-title">
              <div class="card-title">
                <!--
                  Ícone do card: stroke/fill definidos via atributos,
                  sem interferência de regras CSS externas.
                -->
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path fill="#2F3C54" d="M13 2c3.5 0 9 3.5 9 10 0 3-1.5 5.5-4.5 7l-1.2-2.4
                       c1.7-1 3-2.8 3-4.6C19.3 8 16.5 5.5 13 5.5S6.7 8 6.7 12c0 1.8 1.3 3.6 3 4.6
                       L8.5 19C5.5 17.5 4 15 4 12 4 5.5 9.5 2 13 2z"/>
                  <ellipse fill="#2F3C54" cx="8" cy="18.5" rx="2.2" ry="3.5"/>
                  <ellipse fill="#2F3C54" cx="18" cy="18.5" rx="2.2" ry="3.5"/>
                </svg>
                <h2 id="col1-title">Dados da Startup</h2>
              </div>
              <hr class="card-divider" />

              <!-- Foto da Startup -->
              <div class="photo-row">
                <div class="photo-upload">
                  <div class="avatar-circle" role="button" tabindex="0" aria-label="Adicionar foto da startup">
                    <svg width="44" height="44" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <circle fill="#2F3C54" cx="32" cy="22" r="12"/>
                      <path fill="#2F3C54" d="M8 58c0-12 10-20 24-20s24 8 24 20"/>
                    </svg>
                    <span class="avatar-plus" aria-hidden="true">+</span>
                  </div>
                  <span class="photo-label">Adicionar Foto</span>
                </div>
              </div>

              <!-- Nome da Startup -->
              <div class="form-group">
                <label for="startupName">Nome Da Startup</label>
                <div class="input-with-icon">
                  <!--
                    Ícone de campo: stroke="#2F3C54" via ATRIBUTO.
                    A classe .field-icon NÃO define fill/stroke,
                    prevenindo a sobreposição sobre o texto do input.
                  -->
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="2" y="2" width="14" height="14" rx="2" stroke="#2F3C54" stroke-width="1.6"/>
                    <path d="M5 6h8M5 9h8M5 12h5" stroke="#2F3C54" stroke-width="1.4" stroke-linecap="round"/>
                  </svg>
                  <input type="text" id="startupName" name="startupName"
                         placeholder="Digite o nome da Startup" autocomplete="organization" />
                </div>
              </div>

              <!-- E-mail -->
              <div class="form-group">
                <label for="email">E-mail Para Contato</label>
                <div class="input-with-icon">
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="1" y="3" width="16" height="12" rx="2" stroke="#2F3C54" stroke-width="1.6"/>
                    <path d="M1 5.5l8 5 8-5" stroke="#2F3C54" stroke-width="1.4"/>
                  </svg>
                  <input type="email" id="email" name="email"
                         placeholder="contato@startup.com.br" autocomplete="email" />
                </div>
              </div>

              <!-- CNPJ -->
              <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <div class="input-with-icon">
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="2" y="1" width="14" height="16" rx="2" stroke="#2F3C54" stroke-width="1.6"/>
                    <path d="M5 6h8M5 9h8M5 12h5" stroke="#2F3C54" stroke-width="1.4" stroke-linecap="round"/>
                  </svg>
                  <input type="text" id="cnpj" name="cnpj"
                         placeholder="00.000.000/0000-00" maxlength="18" />
                </div>
              </div>

              <!-- Número de Contato -->
              <div class="form-group">
                <label for="phone">Número De Contato</label>
                <div class="input-with-icon">
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3.2 2A1.2 1.2 0 0 1 4.4 1h1.8l1.2 3.5L5.6 6a8.6 8.6 0 0 0 4.4 4.4l1.5-1.8L15 9.8v1.8A1.2 1.2 0 0 1 13.8 13 11.8 11.8 0 0 1 3.2 2z"
                          stroke="#2F3C54" stroke-width="1.4"/>
                  </svg>
                  <input type="tel" id="phone" name="phone"
                         placeholder="(xx) xxxxx-xxxx" autocomplete="tel" />
                </div>
              </div>
            </section>

            <!-- ════════════════════════════════════
                 COLUNA 2 — LOCALIZAÇÃO & PROGRAMA
            ════════════════════════════════════ -->
            <section class="card" aria-labelledby="col2-title">
              <div class="card-title">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M13 2a8 8 0 0 1 8 8c0 5.5-8 14-8 14S5 15.5 5 10a8 8 0 0 1 8-8z"
                        stroke="#2F3C54" stroke-width="2"/>
                  <circle fill="#2F3C54" cx="13" cy="10" r="3"/>
                </svg>
                <h2 id="col2-title">Localização &amp; Programa</h2>
              </div>
              <hr class="card-divider" />

              <!-- Endereço -->
              <div class="form-group">
                <label for="address">Endereço</label>
                <div class="input-with-icon">
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M9 1.5A5.5 5.5 0 0 1 14.5 7c0 3.8-5.5 9.5-5.5 9.5S3.5 10.8 3.5 7A5.5 5.5 0 0 1 9 1.5z"
                          stroke="#2F3C54" stroke-width="1.5"/>
                    <circle fill="#2F3C54" cx="9" cy="7" r="2"/>
                  </svg>
                  <input type="text" id="address" name="address"
                         placeholder="Digite o seu endereço" autocomplete="street-address" />
                </div>
              </div>

              <!-- Participação em Outros Programas -->
              <div class="form-group">
                <label for="programs">Participação em Outros Programas</label>
                <div class="input-with-icon">
                  <svg class="field-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="9" cy="9" r="7.5" stroke="#2F3C54" stroke-width="1.5"/>
                    <path d="M9 5v4l3 2" stroke="#2F3C54" stroke-width="1.4" stroke-linecap="round"/>
                  </svg>
                  <input type="text" id="programs" name="programs"
                         placeholder="Ex.: SEBRAE, Inova MS…" />
                </div>
              </div>

              <!-- Setor de Atuação -->
              <div class="form-group">
                <label for="sector">Setor De Atuação</label>
                <div class="select-wrapper">
                  <select id="sector" name="sector">
                    <option value="">Selecione o setor</option>
                    <option value="tech">Tecnologia</option>
                    <option value="health">Saúde</option>
                    <option value="edu">Educação</option>
                    <option value="fin">Finanças</option>
                    <option value="agro">Agronegócio</option>
                    <option value="retail">Varejo</option>
                    <option value="logistica">Logística</option>
                    <option value="outros">Outros</option>
                  </select>
                </div>
              </div>

              <!-- Data de Fundação -->
              <div class="form-group">
                <label>Data De Fundação</label>
                <div class="date-row">
                  <div class="select-wrapper">
                    <select id="foundDay" name="foundDay" aria-label="Dia de fundação"></select>
                  </div>
                  <div class="select-wrapper">
                    <select id="foundMonth" name="foundMonth" aria-label="Mês de fundação"></select>
                  </div>
                  <div class="select-wrapper">
                    <select id="foundYear" name="foundYear" aria-label="Ano de fundação"></select>
                  </div>
                </div>
              </div>

              <!-- Estágio Atual (tags clicáveis — seleção única) -->
              <fieldset>
                <legend class="section-title">Estágio Atual</legend>
                <div class="tags-row" id="stageTags">
                  <button type="button" class="tag-btn" data-stage="ideacao">Ideação</button>
                  <button type="button" class="tag-btn" data-stage="mvp">MVP</button>
                  <button type="button" class="tag-btn" data-stage="tracao">Tração</button>
                  <button type="button" class="tag-btn" data-stage="escala">Escala</button>
                  <button type="button" class="tag-btn" data-stage="consolidacao">Consolidação</button>
                </div>
              </fieldset>
            </section>

            <!-- ════════════════════════════════
                 COLUNA 3 — QUESTIONÁRIO & FUNDADORES
            ════════════════════════════════ -->
            <section class="card" aria-labelledby="col3-title">
              <div class="card-title">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <rect x="3" y="2" width="16" height="20" rx="2" stroke="#2F3C54" stroke-width="2"/>
                  <path d="M7 7h8M7 11h8M7 15h5" stroke="#2F3C54" stroke-width="1.6" stroke-linecap="round"/>
                  <circle fill="#2F3C54" cx="20" cy="20" r="5"/>
                  <path d="M18 20h4M20 18v4" stroke="white" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
                <h2 id="col3-title">Questionário &amp; Fundadores</h2>
              </div>
              <hr class="card-divider" />

              <!-- Questionário -->
              <div class="form-group">
                <label for="questionnaire">Questionário</label>
                <div class="select-with-plus">
                  <div class="select-wrapper">
                    <select id="questionnaire" name="questionnaire">
                      <option value="">Selecione um questionário</option>
                      <option value="q1">Questionário Geral</option>
                      <option value="q2">Diagnóstico CERNE</option>
                      <option value="q3">Avaliação Inicial</option>
                    </select>
                  </div>
                  <button type="button" class="plus-btn" id="addQuestBtn"
                          title="Adicionar novo questionário" aria-label="Adicionar questionário">+</button>
                </div>
                <div class="info-box" id="questionnaireInfo" hidden></div>
              </div>

              <hr class="section-divider" />

              <!-- Fundadores -->
              <fieldset>
                <legend class="section-title">Fundadores</legend>
                <div class="founders-list" id="foundersList" aria-live="polite"></div>
                <button type="button" class="btn-add-founder" id="addFounderBtn">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
                    <circle cx="7" cy="7" r="6" stroke="#2F3C54" stroke-width="1.5"/>
                    <path d="M7 4v6M4 7h6" stroke="#2F3C54" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                  Adicionar Fundador
                </button>
              </fieldset>
            </section>

          </div><!-- /.columns -->

          <!-- Rodapé -->
          <footer class="modal-footer">
            <button type="button" class="btn btn-cancel" onclick="closeModal()">CANCELAR</button>
            <button type="submit" class="btn btn-save">SALVAR</button>
          </footer>
        </form>

      </div><!-- /.modal-content -->
    </div><!-- /.modal -->
  </div><!-- /.modal-overlay -->
</body>
</html>