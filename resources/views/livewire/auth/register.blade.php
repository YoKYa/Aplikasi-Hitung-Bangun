<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    // ! Nama Siswa Sekolah Usi Alamat Telepon

    public string $name = '';
    public string $school = '';
    public string $birthDate = '';
    public string $address = '';
    public string $telephone = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'school' => ['required', 'string', 'max:255'],
            'birthDate' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        
         $this->redirectIntended(route('dashboard', absolute: false), navigate: true);

        new Registered(($user = User::create($validated)));

        Auth::login($user);

       
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />
         {{-- School --}}

        <flux:input
            wire:model="school"
            :label="__('School')"
            type="text"
            required
            autofocus
            autocomplete="school"
            :placeholder="__('School')"
        />

        {{-- birthDate --}}

        <flux:input
            wire:model="birthDate"
            :label="__('Birth Date')"
            type="date"
            required
            autofocus
            autocomplete="birtDate"
            :placeholder="__('Birth Date')"
        />
        {{-- Telephone --}}
        <flux:input
            wire:model="telephone"
            :label="__('Telephone')"
            type="text"
            required
            autofocus
            autocomplete="telephone"
            :placeholder="__('Telephone')"
        />

        {{-- Address --}}
        <flux:input
            wire:model="address"
            :label="__('Address')"
            type="text"
            required
            autofocus
            autocomplete="address"
            :placeholder="__('Address')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Already have an account?') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
