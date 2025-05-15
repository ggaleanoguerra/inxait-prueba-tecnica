  <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">Nuestra Exclusiva Colección</h2>
                <p class="text-lg text-gray-600">Diseñados sin compromiso, cada vehículo es una obra maestra de
                    ingeniería, rendimiento y estilo.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-car-card image="{{ asset('assets/img/phantom_series.png') }}" title="Phantom Series"
                    description="El arte de la elegancia en movimiento, con un motor V12 que ofrece potencia silenciosa."
                    price="$2,000,000 COP" link="https://github.com/ggaleanoguerra" />

                <x-car-card image="{{ asset('assets/img/velocity_gt.png') }}" title="Velocity GT"
                    description="Rendimiento sin igual con tecnología de punta y aerodinámica perfecta para dominar cada curva."
                    price="$3,800,000 COP" link="https://github.com/ggaleanoguerra" />

                <x-car-card image="{{ asset('assets/img/sovereign_suv.png') }}" title="Sovereign SUV"
                    description="Versatilidad suprema sin sacrificar el lujo, diseñado para dominar cualquier terreno."
                    price="$3,200,000 COP" link="https://github.com/ggaleanoguerra" />
            </div>


            <div class="text-center mt-12">
                <a href="https://github.com/ggaleanoguerra" target="_blank"
                    class="inline-block px-8 py-3 border border-gray-800 text-gray-800 font-medium hover:bg-gray-800 hover:text-white transition duration-200">
                    Ver Todos Los Modelos
                </a>
            </div>
        </div>
