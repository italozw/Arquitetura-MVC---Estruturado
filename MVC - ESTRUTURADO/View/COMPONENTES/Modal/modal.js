function abrirModal(idModal) {
    const modal = document.getElementById(idModal);
    if (!modal) {
        console.warn(`[modal.js] Modal não encontrado: #${idModal}`);
        return;
    }
    modal.showModal();
}

function fecharModal(idModal) {
    const modal = document.getElementById(idModal);
    if (!modal) {
        console.warn(`[modal.js] Modal não encontrado: #${idModal}`);
        return;
    }
    modal.close();
}

document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.abrir-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            abrirModal(btn.dataset.modal);
        });
    });

    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.fechar-modal');
        if (btn) {
            fecharModal(btn.dataset.modal);
        }
    });

    document.querySelectorAll('dialog.template-modal').forEach(modal => {
        modal.addEventListener('click', (e) => {
            const rect = modal.getBoundingClientRect();
            const foraDoModal =
                e.clientX < rect.left ||
                e.clientX > rect.right ||
                e.clientY < rect.top  ||
                e.clientY > rect.bottom;

            if (foraDoModal) {
                fecharModal(modal.id);
            }
        });
    });

});
