  <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-status').forEach(function(toggle) {
                toggle.addEventListener('change', function() {
                    const id = this.dataset.id;
                    const isChecked = this.checked;
                    const statusText = this.closest('label').querySelector('.status-text');
                    const toggleButton = this;

                    // Prevenir múltiples clics mientras se procesa
                    toggleButton.disabled = true;

                    fetch("{{ route('lotteries.toggle') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                id
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Error en la respuesta del servidor');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Actualizar el texto de estado después de confirmación del servidor
                            statusText.textContent = isChecked ? 'Activo' : 'Inactivo';
                        })
                        .catch(error => {
                            // Revertir el toggle si hay un error
                            console.error('Error:', error);
                            toggleButton.checked = !isChecked;
                            statusText.textContent = !isChecked ? 'Activo' : 'Inactivo';
                        })
                        .finally(() => {
                            // Habilitar el toggle nuevamente
                            toggleButton.disabled = false;
                        });
                });
            });
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.btn-sorteo').forEach(el => {
            el.addEventListener('click', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Realizando sorteo...',
                    text: 'Por favor espera',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                setTimeout(() => {
                    window.location.href = this.href;
                }, 500);
            });
        });
    });
</script>

