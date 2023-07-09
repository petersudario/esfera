<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User creation') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 flex justify-between">

            <x-section-title>
                <x-slot name="title">{{__('User creation')}}</x-slot>
                <x-slot name="description">{{ __('Enter personal info for the user creation.') }}</x-slot>
            </x-section-title>

            <form method="POST" action="{{ route('users.store') }}" class="mt-5 md:mt-0 md:col-span-2 flex">
                @csrf
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md grid gap-6">

                    <div class="col-span-6 sm:col-span-4 flex items-center">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    </div>
                    <div class="col-span-6 sm:col-span-4 flex items-center">
                        <span class="absolute">
                            <x-gmdi-phone class="w-6 h-6 mx-3 text-gray-300"/>
                        </span>

                        <x-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required autofocus autocomplete="tel" placeholder="Phone Number" />
                    </div>
                    <div class="col-span-6 sm:col-span-4 flex items-center">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="E-mail" />
                    </div>

                    <div class="col-span-6 sm:col-span-4 flex items-center">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    </div>
                    <div class="col-span-6 sm:col-span-4 flex items-center">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
                    </div>
                    <div class="col-span-6 sm:col-span-4 flex items-center justify-between">
                        <a href="{{route('users.index')}}" class="w-fit px-6 py-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            Cancel
                        </a>
                        <x-button type="submit">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </div>



            </form>

            <x-section-border />
        </div>
    </div>
</x-app-layout>
