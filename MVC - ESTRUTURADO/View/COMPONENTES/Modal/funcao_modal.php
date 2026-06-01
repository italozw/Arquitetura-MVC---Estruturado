<?php

function abrirModal(string $idModal, string $icone, string $titulo): void
{
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
<?php
}

function fecharModal(): void
{
?>
        </form>
    </dialog>
<?php
}

function modal(string $idModal, string $icone, string $titulo, string $arquivo): void
{
    abrirModal($idModal, $icone, $titulo);

    if (file_exists($arquivo)) {
        include $arquivo;
    } else {
        echo '<p class="modal-erro">Conteúdo não encontrado: ' . htmlspecialchars($arquivo) . '</p>';
    }

    fecharModal();
}
?>
