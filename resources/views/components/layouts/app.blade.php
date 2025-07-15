<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
  <nav class="flex justify-between px-6 bg-gradient-to-r from-purple-200 to-purple-500 py-6 shadow-lg">
    <h1>ST Marys</h1>
    <ul class="flex space-x-4 text-white">
      <li><a href="/" class="hover:text-xl  transition">Home</a></li>
      <li><a href="/about">Report</a></li>
      <li><a href="/contact-us">Contact</a></li>
      <li><a href="/todo">ToDo</a></li>
      @auth
        <li class="relative group z-50">
            <button class="flex items-center space-x-2 hover:text-xl transition-all">
                <span>{{ Auth::user()->name }}</span>
                <x-icon name="chevron-down" class="w-4 h-4" />
            </button>
            <div class="absolute right-0 py-2 w-48 bg-white rounded-md shadow-xl hidden group-hover:block transition-all duration-300 ease-in-out">
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="/change-password" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Change Password</a>
                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </li>
      @endauth
      @guest
        <li class="flex space-x-2">
            <a href="/register" class="hover:text-xl transition">Register</a>
            <a href="/login" class="hover:text-xl transition">Login</a>
        </li>
      @endguest
    </ul>
  </nav>
   @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        {{ session('error') }}
    </div>
@endif


  {{ $slot }}
    <footer>
    copyright @2025
  </footer>
</body>
</html>
