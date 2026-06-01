<?php

function ModalTrocaMentor(): void
{
    $idModal = 'modal-troca-mentor';
    $icone   = 'fa-solid fa-user-pen';
    $titulo  = 'Trocar Mentor';
?>
    <dialog id="<?php echo htmlspecialchars($idModal); ?>" class="template-modal">
        <div class="modal-header">
            <h1 class="modal-titulo">
                <i class="<?php echo htmlspecialchars($icone); ?>"></i>
                <?php echo htmlspecialchars($titulo); ?>
            </h1>
            <button class="fechar-modal" data-modal="<?php echo htmlspecialchars($idModal); ?>" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <form class="area-modal" method="post">

        </form>
    </dialog>
<?php
}
?>