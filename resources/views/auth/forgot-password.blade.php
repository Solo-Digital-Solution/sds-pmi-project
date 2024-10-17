<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 custom-text">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 custom-session-status" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="custom-form">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="custom-label" />
            <x-text-input id="email" class="block mt-1 w-full custom-input" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 custom-error" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="custom-button">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
