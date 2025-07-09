<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="sm:text-xl md:text-4xl tracking-tight font-extrabold text-gray-900 ">
                            <span class="block">Organize Your Life</span>
                            <span class="block text-indigo-600">With Todo Master</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            A modern, intuitive todo list application that helps you stay organized and productive. Create, manage, and complete tasks with ease.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{route('add-todo')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img 
                class="h-24 w-24 md:h-32 md:w-32 rounded-full" 
                src="{{asset('images/logo.png')}}">
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Everything you need to stay organized
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  <!-- Gradient for glowing tip -->
  <defs>
    <radialGradient id="glow" cx="50%" cy="30%" r="50%">
      <stop offset="0%" style="stop-color:#ffff99;stop-opacity:1"/>
      <stop offset="100%" style="stop-color:#ffffff;stop-opacity:0"/>
    </radialGradient>
  </defs>
  <!-- Bulb body -->
  <path d="M50 20 C30 20 30 50 50 50 C70 50 70 20 50 20" stroke="#fff" stroke-width="2" fill="#f0f0f0"/>
  <!-- Base -->
  <rect x="40" y="50" width="20" height="20" stroke="#fff" stroke-width="2" fill="#cccccc"/>
  <!-- Threaded part of base -->
  <line x1="40" y1="55" x2="60" y2="55" stroke="#fff" stroke-width="1"/>
  <line x1="40" y1="60" x2="60" y2="60" stroke="#fff" stroke-width="1"/>
  <!-- Glowing tip -->
  <circle cx="50" cy="30" r="10" fill="url(#glow)"/>
</svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Task Management</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Organize your tasks with ease. Create, edit, and track your progress in real-time.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Priority System</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Set priorities for your tasks to focus on what matters most.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Deadline Tracking</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Never miss a deadline again with our built-in deadline tracking system.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Progress Tracking</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">Monitor your progress and celebrate your achievements.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
