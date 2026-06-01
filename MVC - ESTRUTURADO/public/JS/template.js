        var overlay = document.getElementById('modalOverlay');
        var form = document.getElementById('mentorForm');

        function openModal() {
            overlay.classList.add('show');
        }

        function closeModal() {
            overlay.classList.remove('show');
        }

        // Fechar ao clicar no overlay
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                closeModal();
            }
        });

        // Fechar com ESC
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('show')) {
                closeModal();
            }
        });

        // Submit do form
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Mentor salvo com sucesso! (Simulação)');
            closeModal();
        });

        // Contador de caracteres da biografia
        function updateCounter() {
            var textarea = document.getElementById('biografia');
            var counter = document.getElementById('charCount');
            counter.textContent = textarea.value.length;
        }

        // Toggle das tags de competências
        function toggleTag(btn) {
            btn.classList.toggle('selected');
        }
