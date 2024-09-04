<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="Surname" :value="__('Surname')" />
            <x-text-input id="Surname" class="block mt-1 w-full" type="text" name="Surname" :value="old('Surname')" required autofocus autocomplete="Surname" />
            <x-input-error :messages="$errors->get('Surname')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="Firstname" :value="__('Firstname')" />
            <x-text-input id="Firstname" class="block mt-1 w-full" type="text" name="Firstname" :value="old('Firstname')" required autofocus autocomplete="Firstname" />
            <x-input-error :messages="$errors->get('Firstname')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="Middlename" :value="__('Middlename')" />
            <x-text-input id="Middlename" class="block mt-1 w-full" type="text" name="Middlename" :value="old('Middlename')" required autofocus autocomplete="Middlename" />
            <x-input-error :messages="$errors->get('Middlename')" class="mt-2" />
        </div>

        <!-- User name -->
        <div class="mt-4">
            <x-input-label for="Username" :value="__('Username')" />
            <x-text-input id="Username" class="block mt-1 w-full" type="text" name="Username" :value="old('Username')" required autocomplete="Username" />
            <x-input-error :messages="$errors->get('Username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="Password" :value="__('Password')" />

            <x-text-input id="Password" class="block mt-1 w-full"
                            type="password"
                            name="Password"
                            required autocomplete="new-Password" />

            <x-input-error :messages="$errors->get('Password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-Password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
