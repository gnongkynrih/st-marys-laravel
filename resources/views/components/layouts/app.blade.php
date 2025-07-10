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
        <li><a href="/logout">Logout</a></li>
        <li><a href="/register">Change Password</a></li>
      @endauth
      @guest
        <li><a href="/register">Register</a></li>
        <li><a href="/login">Login</a></li>
      @endguest
    </ul>
  </nav>
  @if(session()->has('success'))
    <x-alert title="{{ session()->get('success') }}" positive />
  @endif
  @if(session()->has('error'))
    <x-alert title="{{ session()->get('error') }}" negative />
  @endif


  {{ $slot }}
    <footer>
    copyright @2025
  </footer>
</body>
</html>
