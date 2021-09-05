<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/theme_klass/logo/1628215534/70.png" alt="" style="width: 150px; height: 150px;">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="nis" value="{{ __('NIS/NISN') }}" />
                <x-jet-input id="nis" class="block mt-1 w-full" type="number" name="nis" :value="old('nis')" required />
            </div>
            <!-- <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="nis">
                 NIS
                </label>
                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="nis" type="number" name="nis" required="">
            </div> -->

            <div class="mt-4">
                <x-jet-label for="kelas" value="{{ __('Kelas') }}" />
                <select name="kelas" class="block mt-1 w-full form-control" id="kelas" required>

                    <option value="XRPL1">X RPL1</option>
                    <option value="XRPL2">X RPL2</option>
                    <option value="XI RPL1">XI RPL1</option>
                    <option value="XI RPL2">XI RPL2</option>
                    <option value="XII RPL1">XII RPL1</option>
                    <option value="XII RPL2">XII RPL2</option>

                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
