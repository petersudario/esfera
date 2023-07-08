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

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="name" value="{{ __('Username') }}" />
                        <x-input id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="tel" value="{{ __('Phone Number') }}" />
                        <x-input id="tel" name="tel" type="tel" class="mt-1 block w-full" autocomplete="tel" />
                        <x-input-error for="tel" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="email" value="{{ __('E-mail') }}" />
                        <x-input id="email" name="email" type="email" class="mt-1 block w-full" autocomplete="email" />
                        <x-input-error for="email" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="password" />
                        <x-input-error for="password" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="password_confirmation" />
                        <x-input-error for="password_confirmation" class="mt-2" />
                    </div>


                        <x-button type="submit">
                            {{ __('Create') }}
                        </x-button>

                </div>



            </form>

            <x-section-border />
        </div>
    </div>
</x-app-layout>
