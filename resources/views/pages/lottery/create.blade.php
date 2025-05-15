<x-app-layout>
    <x-slot name="header">
        <h2 class="font-playfair text-xl text-white leading-tight text-center">
            {{ __('Nuevo Sorteo Exclusivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <form method="POST" action="{{ route('lotteries.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('pages.lottery.partials.fields')

                        <div class="flex justify-center mt-8">
                            <button type="submit" class="lottery-submit-btn inline-flex items-center px-6 py-3 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200">
                                <span class="mr-2">{{ __('Crear Sorteo') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </div>


                        @if ($errors->any())
                            <div class="mt-6 bg-red-900/50 border border-red-700 p-4 rounded-lg">
                                <p class="text-red-200 font-medium mb-2">
                                    {{ __('Por favor, corrige los siguientes errores:') }}</p>
                                <ul class="list-disc list-inside text-red-200 text-sm space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
