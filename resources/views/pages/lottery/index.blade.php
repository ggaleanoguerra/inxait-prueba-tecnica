<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-playfair text-xl text-white leading-tight">
                Gestión de <span class="text-amber-500 font-bold">sorteos</span>
            </h2>

            {{-- Acciones: se envuelven y sin wrap interno --}}
            <div class="flex flex-wrap items-center gap-2">
                <a href="{{ route('lotteries.participants.download.all') }}" target="_blank"
                    title="Exportar TODOS los participantes a Excel">
                    <button
                        class="text-black text-xs sm:text-sm transition duration-200
                                   flex items-center gap-1 whitespace-nowrap">
                        <x-icons.excel class="h-5 w-5" />
                        <span>Exportar TODOS los participantes</span>
                    </button>
                </a>

                <a href="{{ route('lotteries.create') }}" title="Crear sorteo">
                    <button
                        class="text-black text-xs sm:text-sm transition duration-200
                                   flex items-center gap-1 whitespace-nowrap">
                        <x-icons.edit class="h-5 w-5" />
                        <span>Crear sorteo</span>
                    </button>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($entities->count())
                <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="sm:overflow-x-auto table-responsive ">
                        <table class="w-full text-sm text-left table-auto m-4">
                            <thead class="text-xs uppercase bg-gray-900 text-amber-500 border-b border-gray-800">
                                <tr>
                                    <th scope="col" class="px-2 py-2 sm:px-6 sm:py-4 font-medium">Nombre</th>
                                    <th scope="col" class="px-2 py-2 sm:px-6 sm:py-4 font-medium">Descripción</th>
                                    <th scope="col" class=" sm:table-cell px-6 py-4 font-medium text-right">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entities as $entity)
                                    <tr
                                        class="bg-gray-900 border-b border-gray-800 hover:bg-gray-800 transition duration-200">
                                        <td class="px-2 py-2 sm:px-6 sm:py-4 font-medium text-gray-100">
                                            {{ $entity->name }}
                                        </td>
                                        <td class="px-2 py-2 sm:px-6 sm:py-4 font-medium text-gray-100">
                                            {{ $entity->description }}
                                        </td>
                                        <td class=" sm:table-cell px-6 py-4 text-right">
                                            <div class="flex justify-end space-x-2">
                                                <a href="{{ route('lotteries.edit', $entity->id) }}"
                                                    title="Editar sorteo">
                                                    <button
                                                        class="p-2 bg-transparent hover:bg-gray-800 text-gray-100 rounded transition duration-200">
                                                        <x-icons.edit class="h-5 w-5" />
                                                    </button>
                                                </a>
                                                <a href="{{ route('lotteries.participants', $entity->id) }}"
                                                    title="Participantes del sorteo">
                                                    <button
                                                        class="p-2 bg-transparent hover:bg-gray-800 text-gray-100 rounded transition duration-200">
                                                        <x-icons.eye class="h-5 w-5 text-gray-400" />
                                                    </button>
                                                </a>
                                                <a href="{{ route('get.winners', $entity->id) }}"
                                                    title="Ganadores del sorteo">
                                                    <button
                                                        class="p-2 bg-transparent hover:bg-gray-800 text-gray-100 rounded transition duration-200">
                                                        <x-icons.people class="h-5 w-5 text-gray-400" />
                                                    </button>
                                                </a>
                                                <a href="{{ route('lotteries.sorteo', $entity->id) }}"
                                                    title="Realizar sorteo">
                                                    <button
                                                        class="p-2 bg-transparent hover:bg-gray-800 text-gray-100 rounded transition duration-200">
                                                        <x-icons.random class="h-5 w-5" />
                                                    </button>
                                                </a>
                                                <a href="{{ route('lotteries.participants.download', $entity->id) }}"
                                                    target="_blank" title="Exportar a Excel">
                                                    <button
                                                        class="p-2 bg-transparent hover:bg-gray-800 text-gray-100 rounded transition duration-200">
                                                        <x-icons.excel class="h-5 w-5 text-gray-400" />
                                                    </button>
                                                </a>
                                                <label class="flex items-center ml-2 cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer toggle-status"
                                                        data-id="{{ $entity->id }}"
                                                        @if ($entity->active) checked @endif>
                                                    <div
                                                        class="relative w-10 h-5 bg-gray-700 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-green-600">
                                                        <div
                                                            class="absolute left-1 top-1 bg-white w-3.5 h-3.5 rounded-full transition-transform duration-200 ease-in-out peer-checked:translate-x-5 peer-checked:bg-green-200">
                                                        </div>
                                                    </div>
                                                    <span class="ml-2 text-sm text-gray-300 select-none status-text">
                                                        {{ $entity->active ? 'Activo' : 'Inactivo' }}
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-3 bg-gray-900 border-t border-gray-800">
                        {{ $entities->links() }}
                    </div>
                </div>
            @else
                <div class="bg-black/90 border border-gray-700 rounded-lg shadow p-8 text-center">
                    <h2 class="text-2xl font-bold text-white mb-2">No hay registros</h2>
                </div>
            @endif
        </div>
    </div>

    @include('pages.lottery.partials.scripts')
</x-app-layout>
