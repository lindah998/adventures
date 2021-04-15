<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
        </h2>
    </x-slot>

    <div class="row">
        <h1 class="pt-3 pl-3">Profile <a href="">Edit Profile</a></h1>  
        <div class="row">
            <div class="col-3">
                <img src="/profileimage/lyndah.jpg" class="rounded-circle" height="100" width="100">
                <button style="color: #0000ff">Change profile picture</button>
            </div>
            <div class="col-9">
                <div class="pr-4">Name:{{Auth::user()->name}}</div>
                <div>Email:{{Auth::user()->email}}</div>
                <div>Username:{{Auth::user()->username}}</div>
                <div>Address:{{Auth::user()->profile->address ?? '-'}}</div>
                <div>Phone No:{{Auth::user()->profile->phone_no ?? '-'}}</div>
                <div>Date of Birth{{Auth::user()->profile->dob ?? '-'}}</div>
            </div>
        </div>
    </div>
</x-app-layout>