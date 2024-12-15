<section>
    <header>
        <h2 class="text-lg font-medium text-nord-5 ">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-nord-comment ">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <div class="mt-6 space-y-6">
        @if (Auth::user()->global_name)
            <div>
                <x-input-label for="global_name" :value="__('Display Name')" />
                <x-text-input id="global_name" name="global_name" type="text" :value="old('global_name', $user->global_name)" required autocomplete="global_name" disabled />
                <x-input-error class="mt-2" :messages="$errors->get('global_name')" />
            </div>
        @endif
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" :value="old('username', $user->username)" required autocomplete="username" disabled />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        @if (!Auth::user()->global_name)
            <div>
                <x-input-label for="discriminator" :value="__('Discriminator')" />
                <x-text-input id="discriminator" name="discriminator" type="text" :value="old('discriminator', $user->discriminator)" required autocomplete="discriminator" disabled />
                <x-input-error class="mt-2" :messages="$errors->get('discriminator')" />
            </div>
        @endif

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email ?? __('Unknown'))" required autocomplete="email" disabled />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->verified)
                <div>
                    <p class="text-sm mt-2 text-nord-comment">
                        {{ __('Your email address is unverified.') }}
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>
