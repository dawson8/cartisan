<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed inset-x-0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('shop') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" x-data="{ open: false }">
                    <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                        {{ __('Shop') }}
                    </x-nav-link>

                    <div x-data="{ open: false }" @mouseover.away="open = false" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent ">
                        <a @mouseover="open = true" href="/" class="text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            Mega Menu
                        </a> 
                        
                        <div x-show="open" class="w-full mt-0 shadow-lg bg-white absolute left-0 top-full">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                <div class="container px-5 mx-auto">
                                    <div class="flex flex-wrap md:text-left text-center">
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                                                <h2 class="title-font font-medium text-gray-900 text-sm mb-3">CATEGORY {{ $i }}</h2>
                                                <nav class="list-none">
                                                    <ul>
                                                    @for ($j = 0; $j < 5; $j++)
                                                        <li>
                                                            <a href="" class="text-gray-600 hover:text-gray-800">Sub Category {{ $j }}</a>
                                                        </li>
                                                    @endfor
                                                    </ul>
                                                </nav>
                                            </div>  
                                        @endfor
                                    </div>
                                </div>                                                       
                            </div>
                        </div>
                    </div>             
                </div>
            </div>

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    @auth
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                    {{ __('Shop') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    @endauth
</nav>



{{-- <nav class="bg-white relative flex items-center w-full justify-between">
    <div class="px-6">
        <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentX">
            <ul class="flex flex-row">
                <li >
                    <a class="block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 " href="#!">Regular link</a>
                </li>
                <li class="dropdown static">
                    <div x-data="{ open: false }" @mouseover.away="open = false">
                        <div @mouseover="open = true">
                            <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 flex items-center whitespace-nowrap" 
                                href="#" type="button">Mega menu
                                
                            </a>
                        </div>
                        
                        <div x-show="open" class="w-full mt-0 shadow-lg bg-white absolute left-0 top-full">
                            <div class="px-6 lg:px-8 py-5">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <a href="#">test one</a>
                                    <a href="#">test one</a>                
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </nav> --}}