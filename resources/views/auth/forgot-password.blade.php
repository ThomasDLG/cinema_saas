<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Vous avez oublié votre mot de passe ? Pas de panique, renseignez l\'adresse mail de votre compte et nous enverrons à cette adresse un lien pour réinitialiser votre mot de passe.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-center mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Envoyer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
