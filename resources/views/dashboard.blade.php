<x-app-layout>
    <x-slot name="header">
        <h2 class="font-playfair text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <h3 class="text-amber-500 font-bold text-lg mb-4">{{ __("¡Bienvenido a ELITEMOTORS!") }}</h3>
                    <p>{{ __("Has iniciado sesión correctamente. Descubre nuestra exclusiva colección de vehículos de lujo.") }}</p>
                </div>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="font-playfair text-amber-500 font-bold text-lg mb-2">{{ __("Modelos Exclusivos") }}</h3>
                        <p class="text-gray-300">{{ __("Explora nuestra colección de vehículos de alto rendimiento.") }}</p>
                        <div class="mt-4">
                            <a href="#" class="inline-block px-4 py-2 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200">
                                {{ __("Ver Catálogo") }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="font-playfair text-amber-500 font-bold text-lg mb-2">{{ __("Eventos") }}</h3>
                        <p class="text-gray-300">{{ __("Mantente informado sobre nuestros próximos eventos y lanzamientos.") }}</p>
                        <div class="mt-4">
                            <a href="#" class="inline-block px-4 py-2 border border-white text-white hover:bg-white hover:text-black transition duration-200">
                                {{ __("Calendario") }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="font-playfair text-amber-500 font-bold text-lg mb-2">{{ __("Mi Perfil") }}</h3>
                        <p class="text-gray-300">{{ __("Gestiona tus datos personales y preferencias.") }}</p>
                        <div class="mt-4">
                            <a href="{{ route('profile.edit') }}" class="inline-block px-4 py-2 border border-white text-white hover:bg-white hover:text-black transition duration-200">
                                {{ __("Editar Perfil") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
