<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-playfair text-xl text-white leading-tight">
                Gestión de <span class="text-amber-500 font-bold">sorteos</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12 flex justify-center items-center min-h-[60vh]">
        <div class="bg-gray-900 border border-amber-500 rounded-xl shadow-2xl max-w-2xl w-full p-8">
            <h2 class="text-3xl font-bold text-amber-400 mb-6 text-center">Lista de Ganadores</h2>
            <ul class="divide-y divide-amber-500">
                @foreach($winners as $item)
                <li class="flex items-center py-6">
                    <div class="w-20 h-20 rounded-full overflow-hidden border-4 border-amber-500 shadow-lg bg-gray-800 flex items-center justify-center mr-6">
                        <img src="https://ui-avatars.com/api/?name={{ $item->participant->name }}+{{ $item->participant->last_name }}" alt="Ganador" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white">{{ $item->participant->name }} {{ $item->participant->last_name }}</h3>
                        <p class="text-gray-300">¡Felicidades por ser ganador del sorteo!</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="mt-8 flex justify-center">
                <a href="{{ route('lotteries.index') }}">
                    <button class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-semibold px-6 py-2 rounded-full shadow transition duration-200">
                        Volver a sorteos
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
