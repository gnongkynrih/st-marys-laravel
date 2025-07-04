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
  <nav class="flex justify-between">
    <h1>ST Marys</h1>
    <ul class="flex space-x-4">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact-us">Contact</a></li>
      <li><a href="/todo">ToDo</a></li>
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
