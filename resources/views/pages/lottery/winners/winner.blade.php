<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-playfair text-xl text-white leading-tight">
                Gestión de <span class="text-amber-500 font-bold">sorteos</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12 flex justify-center items-center min-h-[60vh]">
        <div class="bg-gray-900 border border-amber-500 rounded-xl shadow-2xl max-w-md w-full p-8 flex flex-col items-center">
            @foreach($winner as $item)
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-amber-500 mb-6 shadow-lg bg-gray-800 flex items-center justify-center">
                <img src="https://ui-avatars.com/api/?name={{ $item->participant->name }}+{{ $item->participant->last_name }}" alt="Ganador" class="object-cover w-full h-full" id="winner-image">
            </div>
            <h2 class="text-3xl font-bold text-amber-400 mb-2 text-center">¡Felicidades, <span class="text-white">{{ $item->participant->name }} {{ $item->participant->last_name }}</span>!</h2>
            <p class="text-lg text-gray-200 text-center mb-4">
                Has sido seleccionado como el ganador del sorteo.<br>
                ¡Disfruta tu premio y gracias por participar!
            </p>
            @endforeach
            <div class="mt-4">
                <a href="{{ route('lotteries.index') }}">
                    <button class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-semibold px-6 py-2 rounded-full shadow transition duration-200">
                        Volver a sorteos
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
