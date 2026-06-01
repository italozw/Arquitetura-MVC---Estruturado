<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mentores - Modal</title>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/template.css">
    <script src="../JS/template.js" defer></script>
</head>
<body>

    <!-- Botão para abrir o modal -->
    <button class="trigger-btn" onclick="openModal()">Abrir Modal - Editar Mentores</button>

    <!-- ===== MODAL OVERLAY ===== -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-modal="true">

            <!-- ===== HEADER ===== -->
            <header class="modal-header">
                <div class="header-title">
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="10" r="6" fill="#FFFFFF"/>
                        <path d="M2 28c0-6 4.5-10 10-10s10 4 10 10" stroke="#FFFFFF" stroke-width="2.5" fill="none"/>
                        <circle cx="24" cy="12" r="4" fill="#FFFFFF"/>
                        <path d="M22 28c0-4 2-7 6-8" stroke="#FFFFFF" stroke-width="2" fill="none"/>
                    </svg>
                    <h1 id="modalTitle">Editar Mentores</h1>
                </div>
                <button class="close-btn" onclick="closeModal()" aria-label="Fechar modal">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3 5.71a1 1 0 0 0-1.42 0L12 10.59 7.12 5.71a1 1 0 1 0-1.42 1.42L10.59 12l-4.89 4.88a1 1 0 1 0 1.42 1.42L12 13.41l4.88 4.89a1 1 0 0 0 1.42-1.42L13.41 12l4.89-4.88a1 1 0 0 0 0-1.41z"/>
                    </svg>
                </button>
            </header>

            <!-- ===== CONTENT ===== -->
            <div class="modal-content">

                <!-- STEPPER -->
                <nav class="stepper" aria-label="Etapas do cadastro">
                    <div class="step">
                        <span class="step-circle active">1</span>
                        <span class="step-label active">Dados Pessoais</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step">
                        <span class="step-circle inactive">2</span>
                        <span class="step-label inactive">Disponibilidade</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step">
                        <span class="step-circle inactive">3</span>
                        <span class="step-label inactive">Compêtencias</span>
                    </div>
                </nav>

                <!-- SUBTITLE -->
                <p class="subtitle">Preencha as informações para cadastrar um mentor no sistema.</p>

                <!-- ===== FORM ===== -->
                <form id="mentorForm">
                    <div class="columns">

                        <!-- ===== COLUNA 1: DADOS PESSOAIS ===== -->
                        <section class="card">
                            <div class="card-title">
                                <h2>Dados Pessoais</h2>
                            </div>
                            <hr class="card-divider">

                            <!-- Foto e Banner -->
                            <div class="photo-row">
                                <div class="photo-upload">
                                    <div class="avatar-circle">
                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="22" r="12"/>
                                            <path d="M8 58c0-12 10-20 24-20s24 8 24 20"/>
                                        </svg>
                                        <span class="avatar-plus">+</span>
                                    </div>
                                    <span class="photo-label">Adicionar foto</span>
                                </div>
                                <div class="photo-upload">
                                    <div class="banner-rect">
                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="22" r="12"/>
                                            <path d="M8 58c0-12 10-20 24-20s24 8 24 20"/>
                                        </svg>
                                        <span class="banner-plus">+</span>
                                    </div>
                                    <span class="photo-label">Adicionar Banner</span>
                                </div>
                            </div>

                            <!-- Nome -->
                            <div class="form-group">
                                <label class="label-large" for="nome">Nome</label>
                                <div class="input-with-icon">
                                    <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="14" cy="10" r="5"/>
                                        <path d="M4 26c0-5 4-9 10-9s10 4 10 9"/>
                                    </svg>
                                    <input type="text" id="nome" value="Enilda Aparecida Mendes da Rosa Cáceres">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <div class="input-with-icon">
                                    <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="5" width="24" height="18" rx="3" fill="none" stroke="#2F3C54" stroke-width="2"/>
                                        <path d="M2 8l12 8 12-8" fill="none" stroke="#2F3C54" stroke-width="2"/>
                                    </svg>
                                    <input type="email" id="email" value="EnildaCaceres@gmail.com">
                                </div>
                            </div>

                            <!-- Telefone -->
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <div class="input-with-icon">
                                    <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 0 1 2-2h3l2 5-3 2a14 14 0 0 0 7 7l2-3 5 2v3a2 2 0 0 1-2 2C11 25 3 17 3 7a2 2 0 0 1 2-2z" fill="none" stroke="#2F3C54" stroke-width="1.8"/>
                                    </svg>
                                    <input type="tel" id="telefone" value="(67)9.99125-8342">
                                </div>
                            </div>

                            <!-- Linkedin -->
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <div class="input-with-icon">
                                    <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="26" height="26" rx="4" fill="#2F3C54"/>
                                        <path d="M7 12v9M7 7v1M11 21v-6c0-2 1-3 3-3s3 1 3 3v6M17 15v6" stroke="#FFFFFF" stroke-width="2" fill="none" stroke-linecap="round"/>
                                        <circle cx="7" cy="7.5" r="1.5" fill="#FFFFFF"/>
                                    </svg>
                                    <input type="url" id="linkedin" value="Linkedin.com/in/enildacaceres/">
                                </div>
                            </div>

                            <!-- Instagram -->
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <div class="input-with-icon">
                                    <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="2" width="24" height="24" rx="6" fill="none" stroke="#2F3C54" stroke-width="2"/>
                                        <circle cx="14" cy="14" r="5" fill="none" stroke="#2F3C54" stroke-width="2"/>
                                        <circle cx="21" cy="7" r="1.5" fill="#2F3C54"/>
                                    </svg>
                                    <input type="text" id="instagram" value="@EnildaCaceres_Oficial">
                                </div>
                            </div>

                            <!-- Nome da Empresa -->
                            <div class="form-group">
                                <label for="empresa">Nome da Empresa</label>
                                <input type="text" id="empresa" placeholder="Nome da empresa representada">
                            </div>

                            <!-- Cargo -->
                            <div class="form-group">
                                <label for="cargo">Digite o seu cargo</label>
                                <input type="text" id="cargo" placeholder="Digite o cargo que você pertence">
                            </div>

                            <!-- Frase do perfil -->
                            <div class="form-group">
                                <label for="frase">Escreva uma frase para o seu perfil</label>
                                <input type="text" id="frase" placeholder="Escreva uma frase para o seu perfil">
                            </div>
                        </section>

                        <!-- ===== COLUNA 2: DISPONIBILIDADE ===== -->
                        <section class="card">
                            <div class="card-title">
                                <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="5" width="22" height="20" rx="3" fill="none" stroke="#2F3C54" stroke-width="2.2"/>
                                    <path d="M3 11h22" stroke="#2F3C54" stroke-width="2"/>
                                    <path d="M9 3v4M19 3v4" stroke="#2F3C54" stroke-width="2.2" stroke-linecap="round"/>
                                </svg>
                                <h2>Disponibilidade</h2>
                            </div>
                            <hr class="card-divider">

                            <!-- Dias da semana -->
                            <fieldset>
                                <legend class="section-title">Dias de semana</legend>
                                <div class="checkbox-list">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="segunda" name="dias" value="segunda">
                                        <label for="segunda">Segunda - Feira</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="terca" name="dias" value="terca">
                                        <label for="terca">Terça - Feira</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="quarta" name="dias" value="quarta">
                                        <label for="quarta">Quarta - Feira</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="quinta" name="dias" value="quinta">
                                        <label for="quinta">Quinta - Feira</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="sexta" name="dias" value="sexta">
                                        <label for="sexta">Sexta - Feira</label>
                                    </div>
                                </div>
                            </fieldset>

                            <hr class="section-divider">

                            <!-- Horários -->
                            <fieldset>
                                <legend class="section-title">Horarios</legend>
                                <div class="checkbox-row">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="matutino" name="horario" value="matutino">
                                        <label for="matutino">Matutino</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="vespertino" name="horario" value="vespertino">
                                        <label for="vespertino">Vespertino</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="noturno" name="horario" value="noturno">
                                        <label for="noturno">Noturno</label>
                                    </div>
                                </div>
                            </fieldset>

                            <hr class="section-divider">

                            <!-- Modalidade -->
                            <fieldset style="border:none; padding:0; margin:0;">
                                <legend class="section-title">Modalidade</legend>
                                <div class="checkbox-row">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="presencial" name="modalidade" value="presencial">
                                        <label for="presencial">Presencial</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="online" name="modalidade" value="online">
                                        <label for="online">Online</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="hibrido" name="modalidade" value="hibrido">
                                        <label for="hibrido">Hibrido</label>
                                    </div>
                                </div>
                            </fieldset>

                            <hr class="section-divider">

                            <!-- Biografia pessoal -->
                            <div class="bio-group">
                                <p class="section-title">Biografia pessoal</p>
                                <textarea id="biografia" maxlength="500" placeholder="Conte brevemente sua experiência como mentor..." oninput="updateCounter()"></textarea>
                                <p class="bio-counter"><span id="charCount">0</span> / 500</p>
                            </div>
                        </section>

                        <!-- ===== COLUNA 3: COMPETÊNCIAS & EIXOS CERNE ===== -->
                        <section class="card">
                            <div class="card-title">
                                <h2>Competências & Eixos CERNE</h2>
                            </div>
                            <hr class="card-divider">

                            <!-- Tecnologia -->
                            <div class="competencia-section">
                                <p class="competencia-title">Tecnologia</p>
                                <div class="tags-row">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Produto & Tecnologia
                                    </button>
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Operações
                                    </button>
                                </div>
                            </div>

                            <hr class="section-divider">

                            <!-- Capital -->
                            <div class="competencia-section">
                                <p class="competencia-title">Capital</p>
                                <div class="tags-row">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Capital & Investimentos
                                    </button>
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Finanças
                                    </button>
                                </div>
                            </div>

                            <hr class="section-divider">

                            <!-- Empreendedor -->
                            <div class="competencia-section">
                                <p class="competencia-title">Empreendedor</p>
                                <div class="tags-row">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Estrategia
                                    </button>
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Gestão
                                    </button>
                                </div>
                            </div>

                            <hr class="section-divider">

                            <!-- Mercado -->
                            <div class="competencia-section">
                                <p class="competencia-title">Mercado</p>
                                <div class="tags-row">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Networking & Conexões
                                    </button>
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Marketing & Vendas
                                    </button>
                                </div>
                                <div class="tags-row" style="margin-top: 10px;">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Mercados & Clientes
                                    </button>
                                </div>
                            </div>

                            <hr class="section-divider">

                            <!-- Gestão -->
                            <div class="competencia-section">
                                <p class="competencia-title">Gestão</p>
                                <div class="tags-row">
                                    <button type="button" class="tag-btn" onclick="toggleTag(this)">
                                        <svg viewBox="0 0 16 12"><path d="M1 1h14v10H1z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
                                        Jurídicos & PI
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- ===== FOOTER BUTTONS ===== -->
                    <footer class="modal-footer">
                        <button type="button" class="btn btn-cancel" onclick="closeModal()">CANCELAR</button>
                        <button type="submit" class="btn btn-save">SALVAR</button>
                    </footer>
                </form>
            </div>
        </div>
    </div>
</body>
</html>