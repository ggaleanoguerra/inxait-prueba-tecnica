import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
document.addEventListener('DOMContentLoaded', () => {
  const departamentoSelect = document.getElementById('departamento_id');
  const municipioSelect   = document.getElementById('municipio_id');

  if (departamentoSelect && municipioSelect) {
    departamentoSelect.addEventListener('change', async function () {
      const deptoId = this.value;
      const baseUrl = this.dataset.url;

      municipioSelect.innerHTML = '<option value="">Seleccionar municipio</option>';
      municipioSelect.disabled = true;

      if (!deptoId) {
        return;
      }

      const url = baseUrl.replace('__ID__', deptoId);

      try {
        const { data } = await window.axios.get(url);

        data.forEach(m => {
          const opt = document.createElement('option');
          opt.value = m.id;
          opt.textContent = m.name;
          municipioSelect.appendChild(opt);
        });

        municipioSelect.disabled = false;
        municipioSelect.required = true;
      }
      catch (err) {
        console.error('Error cargando municipios:', err);
      }
    });
  }
});
