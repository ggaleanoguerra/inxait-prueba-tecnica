 <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent z-10"></div>

 <div class="container mx-auto px-4 h-full flex flex-col md:flex-row items-center justify-between relative z-20">
     <!-- Hero Text Left -->
     <div class="max-w-2xl text-white">
         <h1 class="font-playfair text-5xl md:text-7xl font-bold mb-6">Perfección Ingenieril<br>Sin Compromisos
         </h1>
         <p class="text-lg mb-10 opacity-90 max-w-xl">Descubre el arte de la ingeniería automotriz llevado a su
             máxima expresión. Donde la tradición se encuentra con la innovación.</p>
         <div class="flex flex-wrap gap-4">
             <a href="#models"
                 class="px-8 py-3 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200">
                 Explorar Modelos
             </a>
             @if ($lottery && $lottery->active == true)
                 <a href="#participate"
                     class="px-8 py-3 border border-white text-white hover:bg-white hover:text-black transition duration-200">
                     ¿Quieres participar por un automóvil totalmente gratis?
                 </a>
             @endif
         </div>
     </div>
     <!-- Sorteo Card -->
     <div class="flex w-full md:w-auto justify-center md:justify-end mt-10 md:mt-0">
         @if ($lottery)
             <div class="bg-white/90 shadow-2xl rounded-xl p-8 w-full max-w-xs border border-amber-500">
                 <div class="flex items-center mb-4">
                     <svg class="h-10 w-10 text-amber-500 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     <span class="text-lg font-bold text-gray-900">
                         @if ($lottery && $lottery->active == true)
                             {{ $lottery->description }}
                         @else
                             Sorteo Inactivo
                         @endif
                     </span>
                 </div>
                 <div class="mb-2">
                     <span class="text-lg font-bold text-gray-900">
                         @if ($lottery && $lottery->active == true)
                             {{ $lottery->name }}
                         @else
                             Sorteo Inactivo
                         @endif
                     </span>
                 </div>
                 <div class="mt-6 mb-4">
                     <span class="block text-gray-800 font-medium text-center">Aún no hay un ganador del
                         premio</span>
                 </div>
                 <div class="flex justify-center">
                     <a href="#participate"
                         class="px-5 py-2 bg-amber-500 text-black font-semibold rounded hover:bg-amber-400 transition duration-200 text-sm">
                         Participar Ahora
                     </a>
                 </div>
             </div>
         @elseif ($winner)
             <div
                 class="bg-white/90 shadow-2xl rounded-xl p-8 w-full max-w-xs border border-emerald-500 flex flex-col items-center justify-center">
                 <div class="flex items-center mb-4">
                     <svg class="h-10 w-10 text-emerald-500 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M9 12l2 2l4 -4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     <span class="text-lg font-bold text-emerald-700">¡Felicidades!</span>
                 </div>
                 <div class="mt-2 text-center text-gray-800 font-semibold">
                     {{ $winner->participant->name }} {{ $winner->participant->last_name }}<br>
                     Cédula:
                     {{ substr($winner->participant->document_identification, 0, -4) . str_repeat('*', 4) }}
                 </div>
                 <div class="mt-4 text-center text-gray-600 font-medium">
                     Por ganar el premio de nuestro sorteo.
                 </div>
             </div>
         @else
             <div
                 class="bg-white/90 shadow-2xl rounded-xl p-8 w-full max-w-xs border border-gray-300 flex flex-col items-center justify-center">
                 <div class="flex items-center mb-4">
                     <svg class="h-10 w-10 text-gray-400 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     <span class="text-lg font-bold text-gray-700">Sorteo Aniversario</span>
                 </div>
                 <div class="mt-4 text-center text-gray-600 font-medium">
                     En el momento no hay sorteos disponibles.
                 </div>
             </div>
     </div>
     @endif
 </div>
 <div class="hidden sm:block absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20">
     <a href="#models" class="animate-bounce block">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
         </svg>
     </a>
 </div>
