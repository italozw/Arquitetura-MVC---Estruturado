// abrir modal
const openButtons = document.querySelectorAll('.abrir-modal')

openButtons.forEach(button => {
    button.addEventListener('click' , () => {
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalId);

        if (modal) modal.showModal();
    });
});


// fechar modal no x
const closeButtons = document.querySelectorAll('.fechar-modal-cm');

closeButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modalId = button.getAttribute('data-modal');
    const modal = document.getElementById(modalId);
    if (modal) modal.close();
  });
});