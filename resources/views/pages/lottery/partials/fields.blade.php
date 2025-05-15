<div class="space-y-6">
    <!-- Nombre del Sorteo -->
    <div>
        <x-input-label for="name" :value="__('Nombre del Sorteo')" class="text-gray-300 font-medium" />
        <x-text-input id="name" name="name" type="text"
            class="mt-1 block w-full bg-gray-800 border-gray-700 text-white focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50 rounded-md"
            value="{{$entity->name ?? ''}}" required autofocus placeholder="Ej: Sorteo Ferrari Roma 2025" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Descripción del Sorteo -->
    <div class="mt-4">
        <x-input-label for="description" :value="__('Descripción')" class="text-gray-300 font-medium" />
        <textarea id="description" name="description" rows="4"
            class="mt-1 block w-full bg-gray-800 border-gray-700 text-white focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50 rounded-md resize-none"
            placeholder="Describa los detalles del sorteo, premio y condiciones..." required>{{ $entity->description ?? '' }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
        <p class="mt-1 text-sm text-gray-400">
            {{ __('Incluya información relevante sobre el premio, fechas y condiciones del sorteo.') }}</p>
    </div>


    <!-- Estado -->
    <div class="mt-4 flex items-center">
        <input type="hidden" name="active" value="0">
        <input id="active" name="active" type="checkbox"
            value="1"
            @if(isset($entity) && $entity->active) checked @endif
            class="w-5 h-5 rounded bg-gray-800 border-gray-700 text-amber-500 focus:ring-amber-500 focus:ring-opacity-50">
        <label for="active" class="ml-2 block text-gray-300">
            {{ __('Publicar inmediatamente') }}
        </label>
    </div>
    <div class="mt-2">
        <p class="text-sm text-red-500 font-semibold">
            {{ __('Aviso: Si hay otro sorteo activo, se deshabilitará automáticamente para activar este.') }}
        </p>
    </div>


</div>
