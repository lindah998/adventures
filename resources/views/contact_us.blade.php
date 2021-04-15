<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact Us
        </h2>
    </x-slot>

    <div class="text-center m-auto">
      <p>
        <span class="block pt-3 font-bold text-l text-black-400 uppercase">Phone</span>
        Our lines are available 24 hours.
        <span class="block pt-2 text-green-600 font-bold">
        +254 703 117 808/+254 768 930 464
    </span>
      </p>
       <p>
        <span class="block pt-3 font-bold text-l text-black-400 uppercase">Email</span>
       Do you have any questions,comments or suggestions?<br>
         Feel free to get in touch.
        <span class="block pt-2 text-green-600 font-bold">
        lweree90@gmail.com
    </span>
</p>
  <p>
        <span class="block pt-3 font-bold text-l text-black-400 uppercase">Location</span>
       Leave us YOUR INFO and we will get back to you.
              <form>
                <div>
                <x-label for="fullname" />

                <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" placeholder="Full Name *" required autofocus />
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email *" required autofocus/>
            </div>
            <div>
                <x-label for="subject" />

                <x-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" placeholder="Subject *" required autofocus />
            </div>
            <div>
                <x-label for="message" />

                <x-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" placeholder="Message *" required autofocus />
                <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Submit Now') }}
                </x-button>
            </div>
            </div>
            </form>
      </p>
    </div>
</x-app-layout>