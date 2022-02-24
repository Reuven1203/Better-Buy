<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

         <!-- Country -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="country" value="{{ __('Country') }}" />
            <x-jet-input id="country" type="text" class="mt-1 block w-full" wire:model.defer="state.country" autocomplete="country" />
            <x-jet-input-error for="country" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" autocomplete="address" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>

        <!-- City -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="city" value="{{ __('City') }}" />
            <x-jet-input id="city" type="text" class="mt-1 block w-full" wire:model.defer="state.city" autocomplete="city" />
            <x-jet-input-error for="city" class="mt-2" />
        </div>

        <!-- Postal Code -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="postalCode" value="{{ __('Postal Code') }}" />
            <x-jet-input id="postalCode" type="text" class="mt-1 block w-full" wire:model.defer="state.postalCode" autocomplete="postalCode" />
            <x-jet-input-error for="postalCode" class="mt-2" />
        </div>

         <!-- Card Number -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cardNumber" value="{{ __('Card Number') }}" />
            <x-jet-input id="cardNumber" type="number" class="mt-1 block w-full" wire:model.defer="state.cardNumber" autocomplete="cardNumber" />
            <x-jet-input-error for="cardNumber" class="mt-2" />
        </div>

         <!-- Expiry Date -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="expiryDate" value="{{ __('Expiry Date') }}" />
            <x-jet-input id="expiryDate" type="text" class="mt-1 block w-full" wire:model.defer="state.expiryDate" autocomplete="expiryDate" />
            <x-jet-input-error for="expiryDate" class="mt-2" />
        </div>

         <!-- CSV -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="csv" value="{{ __('CSV') }}" />
            <x-jet-input id="csv" type="number" class="mt-1 block w-full" wire:model.defer="state.csv" autocomplete="csv" />
            <x-jet-input-error for="csv" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
