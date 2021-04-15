<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create post
        </h2>
    </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
<form action="{{route('addpost')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <x-label for="title" :value="__('Title')" />

         <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
    </div>
    <div>
        <x-label for="caption" :value="__('Caption')" />
         <x-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required autofocus />
    </div>
    <div>
        <x-label for="image" :value="__('Select image')" />

         <x-input id="image" class="hidden block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
    </div>
    <div class="flex items-center justify-center mt-4">
                                <x-button class="ml-4">
                    {{ __('Add Post') }}
                </x-button>
            </div>
    
</form>
 </x-app-layout>
