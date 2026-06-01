    // ──────────────────────────────────────────────
    // REFERÊNCIAS
    // ──────────────────────────────────────────────
    const overlay       = document.getElementById('modalOverlay');
    const form          = document.getElementById('startupForm');
    const foundersList  = document.getElementById('foundersList');
    const addFounderBtn = document.getElementById('addFounderBtn');
    const addQuestBtn   = document.getElementById('addQuestBtn');
    const questSelect   = document.getElementById('questionnaire');
    const questInfo     = document.getElementById('questionnaireInfo');
    const stageTags     = document.getElementById('stageTags');

    let founderCount = 0;

    // ──────────────────────────────────────────────
    // ABRIR / FECHAR
    // ──────────────────────────────────────────────
    function openModal()  { overlay.classList.add('show');    }
    function closeModal() { overlay.classList.remove('show'); }

    overlay.addEventListener('click', e => {
      if (e.target === overlay) closeModal();
    });

    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && overlay.classList.contains('show')) closeModal();
    });

    // ──────────────────────────────────────────────
    // SUBMIT
    // ──────────────────────────────────────────────
    form.addEventListener('submit', e => {
      e.preventDefault();
      alert('Startup cadastrada com sucesso! (Simulação)');
      closeModal();
    });

    // ──────────────────────────────────────────────
    // TAGS DE ESTÁGIO — seleção única com toggle
    // ──────────────────────────────────────────────
    stageTags.addEventListener('click', e => {
      const btn = e.target.closest('.tag-btn');
      if (!btn) return;

      const alreadyActive = btn.classList.contains('active');

      stageTags.querySelectorAll('.tag-btn').forEach(b => b.classList.remove('active'));

      if (!alreadyActive) btn.classList.add('active');
    });

    // ──────────────────────────────────────────────
    // QUESTIONÁRIO — adicionar nova opção
    // ──────────────────────────────────────────────
    addQuestBtn.addEventListener('click', () => {
      const name = prompt('Nome do novo questionário:');
      if (!name || !name.trim()) return;

      const opt       = document.createElement('option');
      opt.value       = `custom_${Date.now()}`;
      opt.textContent = name.trim();
      questSelect.appendChild(opt);
      questSelect.value = opt.value;

      questInfo.textContent = `✓ "${name.trim()}" adicionado e selecionado.`;
      questInfo.hidden = false;
      setTimeout(() => { questInfo.hidden = true; }, 3000);
    });

    // ──────────────────────────────────────────────
    // FUNDADORES — adicionar / remover
    // ──────────────────────────────────────────────
    addFounderBtn.addEventListener('click', () => {
      founderCount++;

      const item = document.createElement('div');
      item.className = 'founder-item';

      const input         = document.createElement('input');
      input.type          = 'text';
      input.name          = `founder_${founderCount}`;
      input.placeholder   = `Nome do Fundador ${founderCount}`;
      input.setAttribute('aria-label', `Fundador ${founderCount}`);

      const removeBtn         = document.createElement('button');
      removeBtn.type          = 'button';
      removeBtn.className     = 'founder-remove';
      removeBtn.title         = 'Remover fundador';
      removeBtn.textContent   = '×';
      removeBtn.addEventListener('click', () => item.remove());

      item.appendChild(input);
      item.appendChild(removeBtn);
      foundersList.appendChild(item);
      input.focus();
    });

    // ──────────────────────────────────────────────
    // DATA DE FUNDAÇÃO — preenche os selects via JS
    // (substitui os document.write() originais)
    // ──────────────────────────────────────────────
    function buildDateSelects() {
      const dayEl   = document.getElementById('foundDay');
      const monthEl = document.getElementById('foundMonth');
      const yearEl  = document.getElementById('foundYear');

      const monthNames = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];
      const curYear    = new Date().getFullYear();

      // Dias (1–31)
      dayEl.innerHTML = '<option value="">Dia</option>';
      for (let d = 1; d <= 31; d++) {
        dayEl.innerHTML += `<option value="${d}">${d}</option>`;
      }

      // Meses
      monthEl.innerHTML = '<option value="">Mês</option>';
      monthNames.forEach((m, i) => {
        monthEl.innerHTML += `<option value="${i + 1}">${m}</option>`;
      });

      // Anos (ano atual → 1990)
      yearEl.innerHTML = '<option value="">Ano</option>';
      for (let y = curYear; y >= 1990; y--) {
        yearEl.innerHTML += `<option value="${y}">${y}</option>`;
      }
    }

    buildDateSelects();