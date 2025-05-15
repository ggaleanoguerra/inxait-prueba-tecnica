 <div class="container mx-auto px-4 py-4 flex items-center justify-between">
     <div class="flex items-center">
         <a href="/" class="text-white font-playfair text-2xl font-bold">ELITE<span
                 class="text-amber-500">MOTORS</span></a>
     </div>

     <div class="hidden md:flex space-x-8 text-sm font-medium">
         <a href="#models" class="text-white hover:text-amber-500 transition duration-200">MODELOS</a>
         <a href="#performance" class="text-white hover:text-amber-500 transition duration-200">RENDIMIENTO</a>
         <a href="#innovation" class="text-white hover:text-amber-500 transition duration-200">INNOVACIÓN</a>
         <a href="#heritage" class="text-white hover:text-amber-500 transition duration-200">HERENCIA</a>
         <a href="#participate" class="text-white hover:text-amber-500 transition duration-200">PARTICIPA</a>
     </div>

     <div class="hidden md:block">
         @if (Route::has('login'))
             <div class="space-x-4">
                 @auth
                     <a href="{{ url('/dashboard') }}"
                         class="px-6 py-2 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200">
                         Mi Cuenta
                     </a>
                 @else
                     <a href="{{ route('login') }}"
                         class="inline-block whitespace-nowrap
                                   px-6 py-2 border border-white
                                   text-white hover:bg-white hover:text-black
                                   transition duration-200">
                         Iniciar Sesión
                     </a>
                 @endauth
             </div>
         @endif
     </div>

     <!-- Mobile menu button -->
     <div class="md:hidden">
         <button id="mobile-menu-button" class="text-white cursor-pointer">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
             </svg>
         </button>
     </div>
 </div>

 <!-- Mobile menu -->
 <div id="mobile-menu" class="hidden md:hidden bg-black/95 pb-4 px-4">
     <div class="flex flex-col space-y-4 pt-2 pb-3">
         <a href="#models" class="text-white hover:text-amber-500 transition duration-200">MODELOS</a>
         <a href="#performance" class="text-white hover:text-amber-500 transition duration-200">RENDIMIENTO</a>
         <a href="#innovation" class="text-white hover:text-amber-500 transition duration-200">INNOVACIÓN</a>
         <a href="#heritage" class="text-white hover:text-amber-500 transition duration-200">HERENCIA</a>
         <a href="#participate" class="text-white hover:text-amber-500 transition duration-200">PARTICIPA</a>

         @if (Route::has('login'))
             <div class="pt-4 space-y-3">
                 @auth
                     <a href="{{ url('/dashboard') }}"
                         class="block px-6 py-2 bg-amber-500 text-black font-medium rounded text-center hover:bg-amber-400 transition duration-200">
                         Mi Cuenta
                     </a>
                 @else
                     <a href="{{ route('login') }}"
                         class="block px-6 py-2 border border-white text-white text-center hover:bg-white hover:text-black transition duration-200">
                         Iniciar Sesión
                     </a>
                 @endauth
             </div>
         @endif
     </div>
 </div>
