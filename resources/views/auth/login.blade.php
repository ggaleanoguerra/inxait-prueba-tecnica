<x-guest-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 border border-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h3 class="font-playfair text-amber-500 font-bold text-xl mb-4 text-center">{{ __("ELITEMOTORS") }}</h3>
                    <p class="text-gray-300 text-center mb-6">{{ __("Accede a tu cuenta exclusiva") }}</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-gray-100" />
                            <x-text-input id="email" class="block mt-1 w-full bg-gray-800 border-gray-700 text-white focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />

                            <x-text-input id="password" class="block mt-1 w-full bg-gray-800 border-gray-700 text-white focus:border-amber-500 focus:ring focus:ring-amber-500 focus:ring-opacity-50"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded bg-gray-800 border-gray-700 text-amber-500 focus:ring-amber-500" name="remember">
                                <span class="ms-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-300 hover:text-white focus:outline-none transition duration-200" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <button type="submit" class="inline-block px-6 py-2 bg-amber-500 text-black font-medium rounded hover:bg-amber-400 transition duration-200">
                                {{ __('Log in') }}
                            </button>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-800 text-center">
                            <p class="text-gray-400 text-sm">{{ __('¿No tienes una cuenta?') }}
                                <a href="{{ route('register') }}" class="text-amber-500 hover:text-amber-400">
                                    {{ __('Regístrate') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
