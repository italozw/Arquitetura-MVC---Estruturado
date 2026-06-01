<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area-ADM</title>
    <link rel="stylesheet" href="../CSS/area-trabalho-adm.css">
    <link rel="stylesheet" href="../CSS/area-trabalho-adm-calendario.css">
    <script src="../JS/calendario-area-trabalho-adm.js"></script>
</head>

<body class="body-ata">
    <header class="adm-nav-ata">
        <div class="adm-nav-ataa">
            <h1 class="adm-nav-ataa-h1">Área de Trabalho</h1>
            <input type="text" class="adm-nav-ataa-barra" id="barra-pesquisa-ata" placeholder="pesquisar" >
            <p>icon-notificação</p>
        </div>
    </header>
    <div class="container-cards-ata">   
    
        <div class="card-ata">
            <h3>Mentores alocados por EIXO</h3>
            <div class="button01-ata">
            <button class="solicitar-ata">Solicitar mentor</button>
            </div>
              <div class="dropdown-ata">
            <button class="dropbtn-ata" onclick="toggleFiltro()">Filtrar ▼</button>

        <!-- <div id="menuFiltro" class="dropdown-content">
            <a href="#">Todos</a>
            <a href="#">Frontend</a>
            <a href="#">Backend</a>
            <a href="#">Mobile</a>
        </div> -->
    </div>
            
        </div>

        <div class="card-ata">
            <h3>Aproveitamento de Eixos CERNE</h3>
            <div class="button01-ata">
            <button class="questionario-ata">Questionario</button>
            </div>
        </div>
    </div>
    <div class="calendario-ata">

        <div class="topo-ata">

            <button id="prev">◀</button>

            <h2 id="mesAno"></h2>

            <button id="next">▶</button>

        </div>

        <div class="dias-semana-ata">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sáb</div>
        </div>

        <div class="dias-ata" id="dias"></div>

    </div>


    
</body>
</html>