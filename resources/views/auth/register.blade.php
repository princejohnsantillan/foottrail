<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="hidden" name="role" value="{{ request('role') }}" />

            @if(request('role') == 'user')
                <div>
                    <x-jet-label for="first_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required  />
                </div>

                <div class="mt-4">
                    <x-jet-label for="middle_name" value="{{ __('Middle Name') }}" />
                    <x-jet-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')"  />
                </div>

                <div class="mt-4">
                    <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required  />
                </div>

            @endif

            @if(request('role') == 'provider')
                <div>
                    <x-jet-label for="name" value="{{ __('Provider Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required  />
                </div>
            @endif


            @if(in_array(request('role'), ['user', 'provider']))
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="phone" value="{{ __('Phone') }}" />
                    <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="address" value="{{ __('Complete Address') }}" />

                    <div class="mt-1">
                    <textarea id="address" name="address" rows="3" class="form-input shadow-sm rounded-md w-full" required>{{ old('address') }}</textarea>
                    </div>
                </div>
            @endif

            @if(request('role') == 'user')
            <div class="mt-4">
                <x-jet-label for="birthdate" value="{{ __('Birthdate') }}" />
                <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            </div>

            <fieldset class="mt-4">
                <div>
                  <legend class="block font-medium text-sm text-gray-700">
                    Gender
                  </legend>
                </div>
                <div class="mt-2 flex">
                    <div class="flex w-1/2">
                        <input id="gender_male" required name="gender" type="radio" {{ old('gender') == 'male' ? 'selected' : '' }} value="male" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="gender_male" class="ml-3 block text-sm font-medium text-gray-700">
                            Male
                        </label>
                    </div>
                    <div class="flex w-1/2">
                        <input id="gender_femail" required name="gender" type="radio"  {{ old('gender') == 'female' ? 'selected' : '' }} value="female" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="gender_femail" class="ml-3 block text-sm font-medium text-gray-700">
                            Female
                        </label>
                    </div>
                </div>
              </fieldset>
            @endif

            @if(in_array(request('role'), ['user', 'provider']))
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            @endif
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
