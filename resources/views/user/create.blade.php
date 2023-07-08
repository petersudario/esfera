<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User creation') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="add-user">
            <x-slot name="title">
                {{ __('User Information') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Add personal info for the user.') }}
            </x-slot>
        <x-slot name="form">


            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Username') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('E-mail') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Phone Number') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Password') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Confirm Password') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

        </x-slot>
            <x-slot name="actions">
                <x-button>
                    {{ __('Create') }}
                </x-button>
            </x-slot>

        </x-form-section>
        <x-section-border />
    </div>
</x-app-layout>
