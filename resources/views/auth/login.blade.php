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
                    @csrf

                    <div class="relative flex items-center mt-6">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="E-mail" />
                    </div>

                    <div class="relative flex items-center mt-4">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    </div>

                    <x-button class="mt-4">
                        {{ __('Log in') }}
                    </x-button>

                </form>
            </div>

            <div class="flex items-center justify-center py-4 text-center bg-gray-50 ">
                <span class="text-sm text-gray-600">Don't have an account? </span>

                <a href="{{  route('register') }} " class="mx-2 text-sm font-bold text-blue-500 hover:underline">Register</a>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
