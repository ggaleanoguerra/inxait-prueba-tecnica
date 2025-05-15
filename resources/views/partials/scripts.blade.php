@if (\Session::has('swal'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swalData = @json(\Session::get('swal'));
            Swal.fire({
                title: swalData.title,
                text: swalData.message,
                icon: swalData.status,
                showConfirmButton: true,
            });
        });
    </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                document.getElementById('mobile-menu').classList.add('hidden');
            }
        });
    });
</script>
<script>
    document.querySelector('form[action="{{ route('participants.store') }}"]').addEventListener('submit', function(e) {
        // Verifica si el formulario es válido antes de mostrar el loading
        if (this.checkValidity()) {
            Swal.fire({
                title: 'Enviando participación',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }
    });
</script>
