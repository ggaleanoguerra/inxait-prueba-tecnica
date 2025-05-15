<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-playfair text-xl text-white leading-tight">
                Gestión de <span class="text-amber-500 font-bold">participantes del sorteo: {{ $lottery->name }}</span>
            </h2>
            <div class="flex justify-start">
                <a href="{{ route('lotteries.index') }}">
                    <button
                        class="bg-amber-500 hover:bg-amber-400 text-black transition duration-200 flex items-center space-x-2">
                        <x-icons.arrow-back class="h-5 w-5" />
                        </svg>
                        <span>Regresar</span>
                    </button>
                </a>

            </div>

        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($entities->count())
                <div class="min-w-0">
                    <div class="table-responsive m-4">
                        @include('pages.lottery.participants.partials.table')
                        <div class="px-6 py-3 bg-gray-900 border-t border-gray-800">
                            {{ $entities->links() }}
                        </div>
                    </div>
                @else
                    <div class="bg-black/90 border border-gray-700 rounded-lg shadow p-8 text-center">

                        <h2 class="text-2xl font-bold text-white mb-2">Participantes para este sorteo</h2>


                    </div>
            @endif
        </div>
    </div>
    </div>


</x-app-layout>
