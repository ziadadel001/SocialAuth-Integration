<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <div class="text-center my-4">
        <hr class="my-2">
        <span class="text-center font-bold">Or</span>
        <div class="w-3/5 mx-auto mt-4">
            <a href="{{ route('auth.google') }}"
                class="focus:ring-2 focus:ring-indigo-800 focus:ring-offset-4 bg-gray-100 hover:bg-gray-200 rounded flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-google ml-2" viewBox="0 0 16 16">
                    <path
                        d="M15.545 6.558a9.42 9.42 0 0 1-.139 1.626c-.12.87-.377 1.71-.762 2.433-.384.723-.882 1.347-1.489 1.851-.607.505-1.318.9-2.117 1.15-.799.25-1.678.369-2.61.369-1.34 0-2.553-.316-3.638-.95-.99-.577-1.819-1.37-2.471-2.37-.653-1-.979-2.084-.979-3.251 0-1.216.302-2.352.905-3.406.603-1.053 1.43-1.887 2.484-2.5.826-.49 1.752-.737 2.794-.737 1.164 0 2.204.316 3.12.948l-1.268 1.41a4.854 4.854 0 0 0-1.85-.369c-.776 0-1.45.18-2.02.537-.569.358-1.02.867-1.35 1.525-.33.659-.495 1.379-.495 2.162 0 .673.136 1.296.408 1.866.271.57.63 1.05 1.08 1.438.45.388.96.647 1.54.778.582.131 1.16.197 1.74.197.665 0 1.283-.099 1.856-.296.573-.197 1.069-.462 1.48-.796.3-.24.54-.53.73-.87.19-.34.32-.713.4-1.12h-4.176V6.558H15.545z" />
                </svg>
                <span class="text-sm text-left ml-4">Continue with Google</span>
            </a>
        </div>
        <div class="w-3/5 mx-auto mt-4">
            <a href="{{ route('auth.Github') }}"
                class="focus:ring-2 focus:ring-indigo-800 focus:ring-offset-4 bg-gray-100 hover:bg-gray-200 rounded flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-github ml-2" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 0 0-2.548 15.59c.404.074.553-.175.553-.39v-1.417c-2.059.447-2.494-.969-2.494-.969-.336-.85-.82-1.077-.82-1.077-.671-.459.051-.45.051-.45.743.052 1.135.764 1.135.764.658 1.127 1.726.801 2.146.613.067-.477.258-.801.47-.985-1.668-.19-3.418-.834-3.418-3.717 0-.822.293-1.494.775-2.021-.078-.19-.335-1.015.073-2.113 0 0 .633-.203 2.08.775.604-.168 1.24-.25 1.882-.252.642.002 1.278.084 1.882.252 1.447-.978 2.08-.775 2.08-.775.408 1.098.151 1.923.073 2.113.482.527.775 1.199.775 2.021 0 2.891-1.755 3.526-3.426 3.711.265.229.5.676.5 1.362v2.018c0 .218.15.466.556.39A8 8 0 0 0 8 0z" />
                </svg>
                <span class="text-sm text-left ml-4">Continue with GitHub</span>
            </a>
        </div>
    </div>
</x-guest-layout>
