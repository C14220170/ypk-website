<x-guest-layout>
    <div class="px-6 py-4">
        
        {{-- HEADER: Judul Saja (Logo sudah dihapus di layout) --}}
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Login</h2>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-medium" />
                <x-text-input id="email" 
                    class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition duration-200 py-2.5" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />

                <x-text-input id="password" 
                    class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 transition duration-200 py-2.5" 
                    type="password" 
                    name="password" 
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- BAGIAN INGAT SAYA & LUPA PASSWORD SUDAH DIHAPUS DI SINI --}}

            <div class="mt-8">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out uppercase tracking-wider">
                    {{ __('Masuk') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>