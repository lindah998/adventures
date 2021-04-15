<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Book a tour
        </h2>
    </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{route('submit')}}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <x-label for="place" :value="__('Name of the Place')" />

                <x-input id="place" class="block mt-1 w-full" type="text" name="place" :value="old('place')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="people" :value="__('No. of People')" />

                <x-input id="people" class="block mt-1 w-full" type="text" name="people" :value="old('people')" required />
            </div>
            <div>
                <x-label for="hotel" :value="__('Type of Hotel')" />

                <x-input id="hotel" class="block mt-1 w-full" type="text" name="hotel" :value="old('hotel')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="amount" :value="__('Amount')" />

                <x-input id="amount" class="block mt-1 w-full"
                                type="integer"
                                name="amount"
                                :value="old('amount')" />
            </div>

            <div class="flex items-center justify-center mt-4">
                                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
</x-app-layout>

