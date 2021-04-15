<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
        </h2>
    </x-slot>
<div class="background-image m-auto sm:grid grid-cols-1">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text center">
        <div class="m-auto text-center pt-4 pb-4">
               <span class="sm:text-white text-xl  font-bold text-shadow-md pb-2 block">
                Tour The Landscape.</span>
                <span class="text-yellow-600 text-xl font-bold text-shadow-md block">
                Be ready to explore new things...
            </span>
        </div>
            <form action="{{route('search')}}" method="POST">
                <div>
                <x-label for="search" />

                <x-input id="search" class="block mt-1 w-4/5 rounded-2xl," type="text" name="search" :value="old('search')" placeholder="Search for tours *"  autofocus />
            </div>
            </form>
        </div>
    <div>
</div>
</div>
</div>
<div class="grid grid-cols-1 m-auto py-15">
        
        <div class="m-auto pt-2 pb-4 text-center">
            <p class="text-gray-600 block text-l pb-4">Amazing Destinations<br>
            Beaches,Game parks,Resorts,City tours</p>
             <p class="text-gray-600 block text-l pb-4">Best prices Guaranteed<br>
            Our rates are reasonable and competitive</p>
             <p class="text-gray-600 block text-l pb-4">Great Customer Support<br>
            Our customer service is key to our Business approach.</p>
             <p class="text-gray-600 block text-l pb-4">Super Fast Booking<br>
            We make booking process as swift as possible.</p>
        </div>
        <div>
            @foreach($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 pt-4">
        <div>
            <img src="{{asset('/images/'.$post->image)}}" alt="" width="700">

        </div>
        <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{$post->title}}
        </h2>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{$post->caption}}  
        </p>     
    </div>
    </div>
</div>
    @endforeach
        </div>
</div>
        
    
</x-app-layout>