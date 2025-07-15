<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-pink-100 to-purple-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <h2 class="mb-6 text-center text-2xl font-bold text-gray-900">Forgot Password</h2>
        <form wire:submit.prevent="sendResetLink" class="space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required wire:model.defer="email"
                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Enter your email">
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                Send Password Reset Link
            </button>
        </form>
        @if (session()->has('status'))
            <div class="mt-4 text-green-600 text-center">{{ session('status') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="mt-4 text-red-600 text-center">{{ session('error') }}</div>
        @endif
        <div class="mt-6 text-center">
            <a href="/login" class="text-indigo-600 hover:underline">Back to Login</a>
        </div>
    </div>
</div>
