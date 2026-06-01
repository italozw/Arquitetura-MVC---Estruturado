<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela dos Mentores</title>
    <link rel="stylesheet" href="../CSS/crud-mentores.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <button class="abrir-modal" data-modal="modal-1">+ Adicionar Mentores</button>

    <dialog id="modal-1">
        <h1 class="modal-titulo"><i class="fa-solid fa-user-pen"></i> Cadastro de Mentores</h1>
        <button class="fechar-modal" data-modal="modal-1" type="button"><i class="fa-solid fa-xmark"></i></button>

        <form>
            <div class="area-central">

                    <section class="opcao">
                    <p class="opcao1">1  Dados Pessoais</p>
                    <p class="opcao2">2  Disponibilidade</p>
                    <p class="opcao3">3  Competências</p>
                    </section>
                    
                    <p class="subtitulo">Preencha as informações para cadastrar um mentor no sistema.</p>

                <div class="area-central-cards">

                    <section class="card-dados-pessoais">


                        <h1 class="titulo-do-card">Dados Pessoais</h1>

                        <div class="container-midia">
                            <div class="item-midia">
                                <div class="foto-perfil">
                                    <img src="../img/perfil.jpg" alt="Foto de Perfil">
                                    <div class="btn-adicionar"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <p class="legenda">Adicionar foto</p>
                            </div>

                            <div class="item-upload">
                                <div class="foto-banner">
                                    <div class="btn-adicionar"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <p class="legenda">Adicionar Banner</p>
                            </div>
                        </div>
                        <div class="cadastro">
                            <label>Nome</label><div class="icon-box"><i class="fa-solid fa-user"></i>
                                <input type="text" id="nome" placeholder="Digite seu nome"></div>

                            <label>Email</label><div class="icon-box"><i class="fa-solid fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="Digite seu email"></div>

                            <label>Telefone</label><div class="icon-box"><i class="fa-brands fa-square-whatsapp"></i>
                                <input type="text" id="nome" placeholder="(xx) xxxx-xxxx"></div>

                            <label>Linkdin</label><div class="icon-box"><i class="fa-brands fa-linkedin"></i>
                                <input type="text" id="nome" placeholder="Digite o seu Linkedin"></div>

                            <label>Instagram</label><div class="icon-box"><i class="fa-brands fa-square-instagram"></i>
                                <input type="text" id="nome" placeholder="Digite seu Instagram"></div>   
                        </div>

                        <div class="sobre">
                            <label>Nome da Empresa</label>
                            <input type="text" id="empresa" name="empresa" placeholder="Digite o nome da sua empresa">

                            <label>Digite o seu cargo</label>
                            <input type="text" id="cargo" name="cargo" placeholder="Digite o cargo">

                            <label>Escreva uma frase para o seu perfil</label>
                            <input type="text" id="frase-perfil" name="frase-perfil" placeholder="Sua frase de destaque">
                        </div>
                    </section>

                    <section class="card-disponibilidade">
                        <h1 class="titulo-do-card"><i class="fa-solid fa-calendar-days"></i> Disponibilidade</h1>

                        <div class="semana">
                            <p>Dias da Semana</p>
                            <label for="segunda"><input type="checkbox" name="segunda" id="segunda">Segunda-feira</label>
                            <label for="terca"><input type="checkbox" name="terca" id="terca"> Terça-feira</label>
                            <label for="quarta"><input type="checkbox" name="quarta" id="quarta"> Quarta-feira</label>
                            <label for="quinta"><input type="checkbox" name="quinta" id="quinta"> Quinta-feira</label>
                            <label for="sexta"><input type="checkbox" name="sexta" id="sexta"> Sexta-feira</label>
                        </div>

                        <div class="horario">
                            <p>Horários</p>
                            <label for="matutino"><input type="checkbox" name="matutino" id="matutino"> Matutino</label>
                            <label for="verpertino"><input type="checkbox" name="verpertino" id="verpertino">Vespertino</label>
                            <label for="noturno"><input type="checkbox" name="noturno" id="noturno"> Noturno</label>
                        </div>

                        <div class="modalidade">
                            <p>Modalidade</p>
                            <label for="presencial"><input type="checkbox" name="presencial" id="presencial">
                                Presencial</label>
                            <label for="online"><input type="checkbox" name="online" id="online"> Online</label>
                            <label for="hibrido"><input type="checkbox" name="hibrido" id="hibrido"> Híbrido</label>
                        </div>

                        <div class="bio">
                            <label>Biografia</label>
                            <input type="text" id="bio" name="bio" placeholder="Sua experiência como mentor...">
                        </div>
                    </section>

                    <section class="card-cernes">
                        <h1 class="titulo-do-card">Competências & Eixos Cernes</h1>

                        <div class="tecnologia">
                            <p>Tecnologia</p>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Produto e
                                    Tecnologia</span></label>
                            <label class="btn-selecionavel"><input type="checkbox"> <span
                                    class="btn-visual">Operações</span></label>
                        </div>

                        <div class="capital">
                            <p>Capital</p>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Capital &
                                    Investimentos</span></label>
                            <label class="btn-selecionavel"><input type="checkbox"> <span
                                    class="btn-visual">Finanças</span></label>
                        </div>

                        <div class="empreededor">
                            <p>Empreededor</p>
                            <label class="btn-selecionavel"><input type="checkbox"> <span
                                    class="btn-visual">Estratégia</span></label>
                            <label class="btn-selecionavel"><input type="checkbox"> <span
                                    class="btn-visual">Gestão</span></label>
                        </div>

                        <div class="mercado">
                            <p>Mercado</p>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Networking
                                    & Conexões</span></label>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Marketing &
                                    Vendas</span></label>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Mercados &
                                    Clientes</span></label>
                        </div>

                        <div class="gestao">
                            <p>Gestão</p>
                            <label class="btn-selecionavel"><input type="checkbox"> <span class="btn-visual">Jurídico &
                                    PI</span></label>
                        </div>


                    </section>
                </div>

                <div class="area-botoes">
                    <button type="submit" class="cancelar-botao">CANCELAR</button>
                    <button type="submit" class="salvar-botao">SALVAR</button>
                </div>

            </div>

        </form>
    </dialog>

    <script src="../JS/crud-mentores.js"></script>
</body>

</html>
