<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center bg-blue-500 text-white p-2 rounded-sm shadow-2xl">Register</h2>

    <form wire:submit.prevent="register">
            <x-input type="text" label="Name" wire:model="name" class="mb-4"/>
            <x-input type="email" label="Email" wire:model="email" class="mb-4"/>
            <x-input type="password" label="Password" wire:model="password" class="mb-4"/>
            <x-input type="password" label="Confirm Password" wire:model="password_confirmation" class="mb-4"/>
        <div class="text-center">
            <x-button class="bg-pink-500" type="submit" label="Register" wire:loading.attr="disabled">
                <span wire:loading.remove>Register</span>
                <span wire:loading>Registering...</span>
            </x-button>
        </div>
    </form>
</div>
