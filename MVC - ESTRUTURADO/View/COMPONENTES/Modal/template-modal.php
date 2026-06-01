<?php
require_once 'funcao_modal.php';
require_once 'modal_troca_mentor.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/PI/ParkTechCG/PAGES/menu_lateral.php';
echo '<link rel="stylesheet" href="/PI/ParkTechCG/COMPONENTES/Modal/CssModal/Troca_Mentor.css">';

?>

<div class="area-trabalho">
    <button class="abrir-modal" data-modal="modal-troca-mentor" type="button">
        Trocar Mentor
    </button>

    <?php ModalTrocaMentor(); ?>
</div>

<script src="/PI/ParkTechCG/COMPONENTES/Modal/modal.js"></script>