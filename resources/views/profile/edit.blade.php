<x-app-layout>
    <x-slot name="header">
        <h2 class="font-playfair text-xl text-white leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-gray-900 border border-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-amber-500 font-bold text-lg mb-4">{{ __('Información Personal') }}</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-gray-900 border border-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-amber-500 font-bold text-lg mb-4">{{ __('Actualizar Contraseña') }}</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
