<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Tour Record
        </h2>
    </x-slot>
<form method="POST" action="{{route('administrator.add')}}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="county" :value="__('County')" />

                <x-input id="county" class="block mt-1 w-full" type="text" name="county" :value="old('county')" required autofocus />
            </div>
            <div>
                <x-label for="date" :value="__('Date')" />

                <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="duration" :value="__('Duration')" />

                <x-input id="duration" class="block mt-1 w-full" type="text" name="duration" :value="old('duration')" required />
            </div>
            <div>
                <x-label for="hotels" :value="__('Hotels')" />

                <x-input id="hotels" class="block mt-1 w-full" type="text" name="hotels" :value="old('hotels')" required autofocus />
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
                    {{ __('Add') }}
                </x-button>
            </div>
        </form>
</x-app-layout>
