<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <!DOCTYPE html>
    <html lang="en" :class="isDark ? 'dark' : 'light'" x-data="{ isDark: false }">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Mazyar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet">
        <meta name="author" content="Mazyar">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    
    </head>
    
    <body class="font-montserrat text-sm bg-white dark:bg-zinc-900 " >
        <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
            <!-- Left Sidebar -->
            <aside class=" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300 dark:border-zinc-700  hidden md:block ">
    
                <div class=" font-bold text-lg flex items-center gap-x-3">
                    <svg class="h-8 w-8 fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
                    </svg>        
                    <div class="tracking-wide dark:text-white">MCH-DOX<span class="text-red-600">.</span></div>
                </div>
    
                <!-- Menu -->
                <div class="mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm">
                    <div class="text-gray-400/70  font-medium uppercase">ADMIN_VOL</div>
                    <a onclick="showPage('home')" class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white" href="{{ url('/display_vol') }}">
    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <!-- Your SVG path here -->
    </svg>
    <span>Display flights</span>
</a>

<a onclick="showPage('community')" class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white" href="{{ url('/create_flight') }}">
    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <!-- Your SVG path here -->
    </svg>
    <span>Create flights</span>
</a>

<a onclick="showPage('coming_soon')" class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white"  href="{{ url('/status') }}">
    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <!-- Your SVG path here -->
    </svg>
    <span>Flights approval</span>
</a>

                    <div onclick="showPage('coming_soon')" class="mt-8 text-gray-400/70  font-medium uppercase">ADMIN_HOTTEL</div>
                    <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white " href="{{ url('/display_chambre') }}">                  
                     
                        <span>Display chambres</span>
                    </a>
                    <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "   href="{{ url('/create_chambres') }}">                  
                   
                        <span>Create chambres</span>
                    </a> 
                    <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "href="{{ url('/status_chambres') }}">                  
                        <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g>
                                <path d="M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z"></path>
                                <path d="M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z"></path>
                            </g>
                        </svg>
                        <span>Approve chambres</span>
                    </a>
                   
                    <div class="mt-8 text-gray-400/70  font-medium uppercase">General</div>
                    <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white " >                  
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:stroke-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                        <span>Settings</span>
                    </a>
                    <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white" href="#">                  
                        <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g>
                                <path d="M16 13v-2H7V8l-5 4 5 4v-3Z"></path>
                                <path d="M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Logout</span>
                    </a> 
                    <a class=" flex items-center space-x-2 py-1 mt-4" href="#">                  
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 border-gray-300 appearance-none cursor-pointer"  @click="isDark = !isDark" :value="isDark"/>
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle" class="">Dark Theme</label>
                    </a> 
    
    
                </div><!-- /Menu -->
    
            </aside><!-- /Left Sidebar -->
    
            <main class=" flex-1 py-10  px-5 sm:px-10 ">
    
               
    
            @yield('content')
    
                
    
            </main>
    
            <!-- Right Sidebar -->
            <!-- /Right Sidebar -->
    
    
        </div>
    
    </body>
    
    </html>

</div>
