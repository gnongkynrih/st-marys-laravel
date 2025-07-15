<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center bg-blue-500 text-white p-2 rounded-sm shadow-2xl">Welcome</h2>

    <form wire:submit.prevent="login">
            <x-input type="email" label="Email" wire:model="email" class="mb-4"/>
            <x-input type="password" label="Password" wire:model="password" class="mb-4"/>
        <div class="text-center">
            <x-button class="bg-pink-500" type="submit" label="Login" wire:loading.attr="disabled">
                <span wire:loading.remove>Login</span>
            </x-button>
        </div>
        <div class="mt-5">
            <a href="/forgot-password" class="text-blue-500 hover:underline">Forgot Password?</a>
        </div>
    </form>
</div>
