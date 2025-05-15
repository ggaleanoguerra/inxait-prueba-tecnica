  <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
          <div class="flex flex-col md:flex-row gap-12">
              <div class="md:w-1/2">
                  <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">Celebra nuestro aniversario</h2>
                  <p class="text-lg mb-8">¿Quieres ser el afortunado que podrá ganar con nosotros un automóvil
                      totalmente gratis por nuestro aniversario? Llena el formulario de participación y podrás ser
                      el afortunado.</p>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                      <div>
                          <h4 class="font-bold text-lg mb-2">Desarrollador</h4>
                          <p class="text-gray-600">
                              Gabriel Galeano Guerra<br>
                              Fullstack developer<br>
                              Lic. En informática
                          </p>
                      </div>
                      <div>
                          <h4 class="font-bold text-lg mb-2">Contacto</h4>
                          <p class="text-gray-600">
                              Tel: +57 3127017420<br>
                              Email: ggaleanoguerra@gmail.com<br>
                              Web: <a href="https://ggaleanoguerra.tech" class="hover:underline"
                                  target="_blank">ggaleanoguerra.tech</a>
                          </p>
                      </div>
                  </div>

                  <div class="flex gap-4">
                      <a href="https://github.com/ggaleanoguerra" target="_blank"
                          class="w-10 h-10 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-amber-500 transition duration-200">
                          <x-icons.github />
                      </a>
                      <a href="https://www.instagram.com/gabsaysgab/" target="_blank"
                          class="w-10 h-10 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-amber-500 transition duration-200">
                          <x-icons.instagram />
                      </a>
                      <a href="https://www.x.com/ggaleanoguerra/" target="_blank"
                          class="w-10 h-10 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-amber-500 transition duration-200">
                          <x-icons.twitter />
                      </a>
                      <a href="https://www.linkedin.com/in/ggaleanoguerra/" target="_blank"
                          class="w-10 h-10 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-amber-500 transition duration-200">
                          <x-icons.linkedin />
                      </a>
                  </div>
              </div>

              <div class="md:w-1/2">
                  <form method="POST" action="{{ route('participants.store') }}"
                      class="bg-gray-50 p-8 rounded-lg shadow-lg">
                      @csrf
                      <h3 class="text-2xl font-bold mb-6">Participar en el sorteo</h3>

                      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                          <div>
                              <x-input-label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                                  Nombre <span class="text-red-500">*</span>
                              </x-input-label>
                              <x-text-input id="name" name="name" value="{{ old('name') }}" required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  placeholder="Ingresa tus nombres" />
                              @error('name')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>

                          <div>
                              <x-input-label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">
                                  Apellidos <span class="text-red-500">*</span>
                              </x-input-label>
                              <x-text-input id="last_name" name="last_name" value="{{ old('last_name') }}" required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  placeholder="Ingresa tus apellidos" />
                              @error('last_name')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>

                          <div>
                              <x-input-label for="document_identification"
                                  class="block text-sm font-medium text-gray-700 mb-1">
                                  Cédula <span class="text-red-500">*</span>
                              </x-input-label>
                              <x-text-input type="number" id="document_identification" name="document_identification"
                                  value="{{ old('document_identification') }}" required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  placeholder="Ingresa tu cédula" />
                              @error('document_identification')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>

                          <div>
                              <x-input-label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                  Correo electrónico <span class="text-red-500">*</span>
                              </x-input-label>
                              <x-text-input type="email" id="email" name="email" value="{{ old('email') }}"
                                  required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  placeholder="Ingresa tu email" />
                              @error('email')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>
                      </div>

                      <div class="mb-6">
                          <x-input-label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                              Celular <span class="text-red-500">*</span>
                          </x-input-label>
                          <x-text-input type="number" id="phone" name="phone" value="{{ old('phone') }}"
                              required
                              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                              placeholder="Ingresa tu celular" />
                          @error('phone')
                              <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                          @enderror
                      </div>

                      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                          <div class="mb-6">
                              <label for="departamento_id" class="block text-sm font-medium text-gray-700 mb-1">
                                  Departamento de residencia <span class="text-red-500">*</span>
                              </label>
                              <select id="departamento_id" name="departamento_id"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  required data-url="{{ route('municipios.byDepartamento', ['id' => '__ID__']) }}">
                                  <option value="">Seleccionar departamento</option>
                                  @foreach ($departamentos as $departamento)
                                      <option value="{{ $departamento->id }}"
                                          {{ old('departamento_id') == $departamento->id ? 'selected' : '' }}>
                                          {{ $departamento->name }}
                                      </option>
                                  @endforeach
                              </select>
                              @error('departamento_id')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>

                          <div class="mb-6">
                              <label for="municipio_id" class="block text-sm font-medium text-gray-700 mb-1">
                                  Municipio de residencia
                              </label>
                              <select id="municipio_id" name="municipio_id"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-amber-500 focus:border-amber-500"
                                  {{ old('municipio_id') ? '' : 'disabled' }}>
                                  <option value="">Seleccionar municipio</option>

                              </select>
                              @error('municipio_id')
                                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                              @enderror
                          </div>
                      </div>

                      <!-- Autorización -->
                      <div class="mb-6">
                          <label class="flex items-start space-x-2">
                              <input type="checkbox" id="data_authorization" name="data_authorization" required
                                  class="mt-1" {{ old('data_authorization') ? 'checked' : '' }}>
                              <span class="text-sm text-gray-700">
                                  Autorizo el tratamiento de mis datos...
                                  <button type="button" class="text-amber-500 underline hover:text-amber-600"
                                      onclick="document.getElementById('modal-datos').classList.remove('hidden')">Haga
                                      clic aquí</button>
                              </span>
                          </label>
                          @error('data_authorization')
                              <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                          @enderror
                      </div>

                      <!-- Botón -->
                      <button type="submit"
                          class="w-full px-6 py-3 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200"
                          id="participar-btn">
                          Participar
                      </button>
                  </form>

              </div>
          </div>
      </div>
  </div>
@include('partials.modal')
