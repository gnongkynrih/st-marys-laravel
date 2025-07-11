<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center bg-blue-500 text-white p-2 rounded-sm shadow-2xl">Change Password</h2>

    <form wire:submit.prevent="changePassword">
            <x-input type="password" label="Current Password" wire:model="current_password" class="mb-4"/>
            <x-input type="password" label="New Password" wire:model="password" class="mb-4"/>
            <x-input type="password" label="Confirm New Password" wire:model="password_confirmation" class="mb-4"/>
        <div class="text-center">
            <x-button class="bg-pink-500" type="submit" label="Change Password" wire:loading.attr="disabled">
                <span wire:loading.remove>Change Password</span>
            </x-button>
        </div>
    </form>
</div>
