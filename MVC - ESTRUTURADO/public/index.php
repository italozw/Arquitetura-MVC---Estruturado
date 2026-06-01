<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="JS/login.js"></script>

    <title>ParkTecCG</title>
</head>

<body class="container-login">
    <header class="area-style-login">

        <div class="area-foto-login">
            <div class="logo-login">
                <img src="IMG/logos/logo5.png" alt="Logo ParkTecCG">
            </div>
        </div>

        <div class="area-design-login">
            <div class="triangulo-login"></div>
        </div>

    </header>

    <main class="area-cadastro-login">
        <form action="" class="form-login">
            <div class="textos-login">
                <h2>Bem-vindo </h2>
                <h1>ao SGRTEC</h1>
                <div class="texto-login">
                    <p class="p-login">Entre com seu Email e sua senha para acessar sua conta!</p>
                </div>
            </div>
            <div class="inputs-login">
                <div class="input-login">
                    <!-- Esses dois labels em cima dos dois inputs são para recursos de maior acessibilidade. Eles estão configurados para não aparecer, mas ao usar o recurso de escuta ficará mais acessível para mais usuários. -->
                    <label class="sr-only" for="email-login">Email</label>
                    <input type="email" name="email" id="email-login" placeholder="Email">
                    <i class="fa-solid fa-user user-icon-login"></i>
                </div>
                <div class="input-login">
                    <label class="sr-only" for="senha-login">Senha</label>
                    <input class="input-login" type="password" name="senha" id="senha-login" placeholder="Senha">
                    <i class="bi bi-eye-fill eye-icon-login" id="btn-senha" onclick="mostrarSenha()"></i>
                </div>
            </div>
            <div class="acoes-login">
                <div class="acoes-box-login">
                    <div class="box-check-login">
                        <input type="checkbox" id="checkbox-1-login" />
                        <label for="checkbox-1-login"></label>
                    </div>
                </div>
                <label id="lembrar-login"for="lembrar-acesso">lembrar-acesso!</label>
                <a class="a-login" href="PAGES/menu_lateral.html">Esqueci minha senha</a>
            </div>
            <div class="cadastre-se-login">
                <a class="a-login" href="">Cadastre-se.</a>
            </div>
            <div class="botao-login">
                <!-- type button temporariamente, apenas para teste de fluxo de telas -->
                <button class="btn-login" type="button" onclick="window.location.href='PAGES/menu_lateral.html'">Acessar</button>
            </div>
        </form>    
    </main>
</body>
</html>