<div class="bg-white shadow-xl overflow-hidden rounded-lg transition-transform hover:scale-105">
    <div class="h-64 bg-cover bg-center cursor-pointer" style="background-image: url('{{ $image }}')"></div>
    <div class="p-6">
        <h3 class="text-2xl font-bold mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <div class="flex justify-between items-center">
            <span class="text-xl font-semibold">Desde {{ $price }}</span>
            <a href="{{ $link }}" target="_blank" class="text-amber-500 font-medium hover:underline">Ver Detalles</a>
        </div>
    </div>
</div>
