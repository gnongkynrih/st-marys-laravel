<div class="mt-5 max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6 text-purple-500">Edit Profile</h1>

   

    <div class="space-y-6">
        <!-- Profile Image -->
        <div class="flex items-center justify-center">
            @if ($profile && $profile->image)
                <img src="{{ asset('storage/' . $profile->image) }}" 
                     alt="Profile Image" 
                     class="w-32 h-32 rounded-full object-cover mb-4">
            @else
                <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center mb-4">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
            @endif
        </div>

        <!-- Form -->
        <form wire:submit.prevent="updateProfile" class="space-y-4">
            <x-input type="text" label="Name" wire:model="name" class="mb-4"/>
            <x-input type="text" label="Mobile" wire:model="mobile" class="mb-4"/>
            <
            <!-- Image -->
            <div>
                <label for="profileImage" class="block text-sm font-medium text-gray-700">Profile Image</label>
                <input type="file" 
                       id="profileImage" 
                       accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                       wire:model="profileImage" 
                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                @error('profileImage')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</div>
