<x-guest-layout>
    <x-authentication-card>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="px-6 py-4">
                <div class="flex justify-center mx-auto">
                    <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt="">
                </div>

                <h3 class="mt-3 text-xl font-medium text-center text-gray-600 ">Welcome!</h3>

                <p class="mt-1 text-center text-gray-500 ">Login or create account</p>

                <form method="POST" action="{{ route('login') }}">
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-sm text-gray-600 hover:text-gray-500">Forget Password?</a>

                        <x-button class="ml-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>

            <div class="flex items-center justify-center py-4 text-center bg-gray-50 ">
                <span class="text-sm text-gray-600">Don't have an account? </span>

                <a href="{{  route('register') }} " class="mx-2 text-sm font-bold text-blue-500 hover:underline">Register</a>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
