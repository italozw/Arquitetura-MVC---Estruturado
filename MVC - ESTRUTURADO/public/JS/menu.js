/* =========================================================
   MENU LATERAL — Script principal
   Controla: navegação ativa, toggle abrir/fechar,
   persistência via localStorage, menu mobile (hamburger)
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       SELETORES — Elementos do DOM
    ===================================================== */

    const sidebar = document.querySelector('.Menu-Lateral');
    const opcoesMenu = document.querySelectorAll('.caixa-opcao-menu');
    const toggleBtn = document.getElementById('open_btn_menu');
    const overlay = document.getElementById('overlay');
    const hamburger = document.querySelector('.hamburger-menu');

    /* =====================================================
       NAVEGAÇÃO — Destaque do item ativo
    ===================================================== */

    /** Marca a opção clicada como ativa e remove das demais */
    function ativarOpcaoMenu(opcaoClicada) {
        opcoesMenu.forEach(function (opcao) {
            opcao.classList.remove('active');
        });
        opcaoClicada.classList.add('active');
    }

    opcoesMenu.forEach(function (opcao) {
        opcao.addEventListener('click', function () {
            ativarOpcaoMenu(this);
        });
    });

    /* =====================================================
       TOGGLE — Expandir / Recolher menu (desktop)
    ===================================================== */

    /** Alterna estado do menu e persiste no localStorage */
    function toggleSidebar() {
        sidebar.classList.toggle('fechado');

        var estaFechado = sidebar.classList.contains('fechado');
        localStorage.setItem('menuFechado', estaFechado ? 'true' : 'false');
    }

    /** Restaura estado salvo do menu ao carregar a página */
    function restaurarEstadoMenu() {
        var menuFechado = localStorage.getItem('menuFechado');
        if (menuFechado === 'true') {
            sidebar.classList.add('fechado');
        }
    }

    toggleBtn.addEventListener('click', toggleSidebar);
    restaurarEstadoMenu();

    /* =====================================================
       MOBILE — Hamburger e overlay
    ===================================================== */

    /** Abre/fecha o menu lateral no mobile */
    function toggleMenuMobile() {
        sidebar.classList.toggle('aberto');
        overlay.classList.toggle('aberto');
    }

    hamburger.addEventListener('click', toggleMenuMobile);
    overlay.addEventListener('click', toggleMenuMobile);

});
