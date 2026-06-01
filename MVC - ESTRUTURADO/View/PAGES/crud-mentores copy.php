<?php
require_once '../COMPONENTES/Modal/funcao_modal.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/PI/ParkTechCG/PAGES/menu_lateral.php';
echo '<link rel="stylesheet" href="/PI/ParkTechCG/CSS/style.css">';
echo '<link rel="stylesheet" href="/PI/ParkTechCG/CSS/modal.css">';
?>

<div class="area-trabalho">
    <button class="abrir-modal" data-modal="modal">+ Adicionar Mentores</button>

    <?php abrirModal('modal', 'fa-solid fa-user-pen', 'Cadastro de Mentores'); ?>
    <section class="opcao-cm">
        <div class="opcao-cm1">
            <p class="circle-cm1">1</p>
            <p>Dados Pessoais</p>
            <p class="line"></p>

        </div>
        <div class="opcao-cm2">
            <p class="circle-cm2">2</p>
            <p>Disponibilidade</p>
            <p class="line"></p>

        </div>
        <div class="opcao-cm3">
            <p class="circle-cm3">3</p>
            <p>Competências</p>
        </div>

    </section>

    <p class="subtitulo-cm">Preencha as informações para cadastrar um mentor no sistema.</p>

    <div class="area-central-cards-cm">

        <section class="card-dados-pessoais-cm">

            <h1 class="titulo-do-card-cm">Dados Pessoais</h1>

            <div class="container-midia-cm">
                <div class="item-midia-cm">
                    <div class="foto-perfil-cm">
                        <img src="../img/perfil.jpg" alt="Foto de Perfil">
                        <div class="btn-adicionar-cm"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="legenda-cm">Adicionar foto</p>
                </div>

                <div class="item-upload-cm">
                    <div class="foto-banner-cm">
                        <div class="btn-adicionar-cm"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="legenda-cm">Adicionar Banner</p>
                </div>
            </div>

            <div class="cadastro-cm">
                <label>Nome</label>
                <div class="icon-box-cm"><i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Digite seu nome">
                </div>

                <label>Email</label>
                <div class="icon-box-cm"><i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Digite seu email">
                </div>

                <label>Telefone</label>
                <div class="icon-box-cm"><i class="fa-brands fa-square-whatsapp"></i>
                    <input type="text" placeholder="(xx) xxxx-xxxx">
                </div>

                <label>Linkedin</label>
                <div class="icon-box-cm"><i class="fa-brands fa-linkedin"></i>
                    <input type="text" placeholder="Digite o seu Linkedin">
                </div>

                <label>Instagram</label>
                <div class="icon-box-cm"><i class="fa-brands fa-square-instagram"></i>
                    <input type="text" placeholder="Digite seu Instagram">
                </div>
            </div>

            <div class="sobre-cm">
                <label>Nome da Empresa</label>
                <input type="text" placeholder="Digite o nome da sua empresa">

                <label>Digite o seu cargo</label>
                <input type="text" placeholder="Digite o cargo">

                <label>Escreva uma frase para o seu perfil</label>
                <input type="text" placeholder="Sua frase de destaque">
            </div>
        </section>

        <section class="card-disponibilidade-cm">
            <h1 class="titulo-do-card-cm"><i class="fa-solid fa-calendar-days"></i> Disponibilidade</h1>

            <div class="semana-cm">
                <p>Dias da Semana</p>
                <label><input type="checkbox"> Segunda-feira</label>
                <label><input type="checkbox"> Terça-feira</label>
                <label><input type="checkbox"> Quarta-feira</label>
                <label><input type="checkbox"> Quinta-feira</label>
                <label><input type="checkbox"> Sexta-feira</label>
            </div>

            <div class="horario-cm">
                <p>Horários</p>
                <label><input type="checkbox"> Matutino</label>
                <label><input type="checkbox"> Vespertino</label>
                <label><input type="checkbox"> Noturno</label>
            </div>

            <div class="modalidade-cm">
                <p>Modalidade</p>
                <label for="presencial"><input type="checkbox" name="presencial" id="presencial">
                    Presencial</label>
                <label><input type="checkbox"> Online</label>
                <label><input type="checkbox"> Híbrido</label>
            </div>

            <div class="bio-cm">
                <label>Biografia</label>
                <input type="text" placeholder="Sua experiência como mentor...">
            </div>
        </section>

        <section class="card-cernes-cm">
            <h1 class="titulo-do-card-cm">Competências & Eixos Cernes</h1>

            <div class="tecnologia-cm">
                <p>Tecnologia</p>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Produto e Tecnologia</span></label>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Operações</span></label>
            </div>

            <div class="capital-cm">
                <p>Capital</p>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Capital & Investimentos</span></label>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Finanças</span></label>
            </div>

            <div class="empreededor-cm">
                <p>Empreendedor</p>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Estratégia</span></label>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Gestão</span></label>
            </div>

            <div class="mercado-cm">
                <p>Mercado</p>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Networking & Conexões</span></label>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Marketing & Vendas</span></label>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Mercados & Clientes</span></label>
            </div>

            <div class="gestao-cm">
                <p>Gestão</p>
                <label class="btn-selecionavel-cm"><input type="checkbox"><span
                        class="btn-visual-cm">Jurídico & PI</span></label>
            </div>
        </section>
    </div>

    <div class="area-botoes-cm">
        <button type="button" class="cancelar-botao-cm">CANCELAR</button>
        <button type="submit" class="salvar-botao-cm">SALVAR</button>
    </div>
</div>

<?php fecharModal(); ?>
</div>
<script src="/PI/ParkTechCG/COMPONENTES/Modal/modal.js"></script>