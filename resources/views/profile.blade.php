<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profile
        </h2>
    </x-slot>

    <div class="row">
        <div class="flex"><h1 class="mt-3 ml-3">Profile <a href="" class="bg-blue-700 text-white-800 rounded-2xl pl-2 pr-2 pt-1 pb-1 ml-6">Edit Profile</a> </h1></div> 
        <div class="row">
            <div class="col-3">
                <img src="/profileimage/lyndah.jpg" class="rounded-2xl mt-4" height="100" width="100">
                <x-button style="color: #ffffff" class="mt-4 ml-4">Change profile picture</x-button>
            </div>
            <div class="col-9">
                <div class="ml-4 mt-4">Name:{{Auth::user()->name}}</div>
                <div class="ml-4">Email:{{Auth::user()->email}}</div>
                <div class="ml-4">Username:{{Auth::user()->username}}</div>
                <div class="ml-4">Address:{{Auth::user()->profile->address ?? '-'}}</div>
                <div class="ml-4">Phone No:{{Auth::user()->profile->phone_no ?? '-'}}</div>
                <div class="ml-4">Date of Birth:{{Auth::user()->profile->dob ?? '-'}}</div>
            </div>
        </div>
    </div>
</x-app-layout>