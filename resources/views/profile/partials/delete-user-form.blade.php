<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium" style="background: linear-gradient(to right,rgb(85, 39, 112),rgb(111, 93, 139)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-4 py-2 text-white rounded-md hover:opacity-90 transition-all"
        style="background: linear-gradient(to right, rgb(139, 39, 39), rgb(179, 71, 71));"
    >{{ __('Delete Account') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium" style="background: linear-gradient(to right,rgb(139, 39, 39),rgb(179, 71, 71)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="text-purple-900"/>

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')" class="mr-3">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <button
                    type="submit"
                    class="px-4 py-2 text-white rounded-md hover:opacity-90 transition-all"
                    style="background: linear-gradient(to right, rgb(139, 39, 39), rgb(179, 71, 71));"
                >
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
