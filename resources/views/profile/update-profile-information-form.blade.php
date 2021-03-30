<x-jet-form-section submit="">
    <x-slot name="title">
        {{ __('Information sur le profil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Visualisez vos informations de profil') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nom') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>



        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

</x-jet-form-section>
