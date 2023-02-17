<section class="space-y-6">

    <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
    {{ __('Supprimer le compte') }}
    </x-primary-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Êtes-vous sûr de vouloir supprmier votre compte ?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Cette action est immédiate et définitive, pour supprimer votre compte entrer votre mot de passe actuel et confirmer.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Mot de passe"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Annuler') }}
                </x-secondary-button>

                <x-primary-button class="ml-3">
                    {{ __('Supprimer le compte') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>
