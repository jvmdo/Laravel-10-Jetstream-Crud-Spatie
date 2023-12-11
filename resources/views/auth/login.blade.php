<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col items-center">
                <x-authentication-card-logo />

                @if ($role == 'user')
                    <h1 class="text-2xl font-semibold text-gray-900 mt-4 mb-2">Provider Area Login</h1>
                @else
                    <h1 class="text-2xl font-semibold text-gray-900 mt-4 mb-2">Annalist Area Login</h1>
                @endif
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if ($role == 'user')
            @if (Route::has('register'))
                <div class="flex flex-col">
                    <h2 class="text-xl font-semibold text-gray-900 mt-4 mb-2">Do not have access?</h2>

                    <a href="{{ route('register') }}"
                        class="text-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                        Create an account
                    </a>

                    <h2 class="text-xl font-semibold text-gray-900 mt-4 mb-2">Or sign in with your credentials</h2>
                </div>
            @endif
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>

            {{-- Hidden admin input --}}
            @if ($role == 'admin')
                <x-input type="hidden" name="admin" value="admin" />
            @endif
        </form>
    </x-authentication-card>
</x-guest-layout>
