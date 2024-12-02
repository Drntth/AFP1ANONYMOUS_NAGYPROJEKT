<div class="bg-gray-950 backdrop-blur-lg bg-opacity-50 p-4 z-50">
    @if (Route::has('login'))
        <nav class="container mx-auto flex items-center justify-between">

            <div class="flex items-center space-x-4">
                @if ($isMainPage)
                    <a href="/" class="text-white text-2xl font-semibold">Webshop</a>
                @elseif ($isDashboard)
                    <a href="/dashboard" class="text-white text-2xl font-semibold">Dashboard</a>
                @endif
            </div>

            <div id="menu" class="hidden sm:flex sm:items-center space-x-6">
                <a href="/" class="text-gray-300 hover:text-white">Home</a>
                @if ($isMainPage)
                    <a href="/contact" class="text-gray-300 hover:text-white">Contact</a>
                    <a href="/about" class="text-gray-300 hover:text-white">About</a>
                    <div class="relative group hidden sm:block">
                        <button class="text-gray-300 hover:text-white flex items-center space-x-2 focus:outline-none">
                            <span>Products</span>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <div class="absolute right-0 hidden bg-gray-950 backdrop-blur-lg bg-opacity-90 text-white border border-gray-600 rounded-md mt-2 w-auto shadow-md group-focus-within:block">
                            <a href="/products" class="block px-4 py-2 text-sm hover:bg-gray-700">All</a>
                            @foreach (App\Enums\category_id_enum::cases() as $category)
                                <a href="{{ url('/products?category=' . $category->value) }}" class="block px-4 py-2 text-sm hover:bg-gray-700">
                                    {{ $category->value }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @elseif ($isDashboard)
                    @auth
                        @if (Auth::user()->role === 'admin')
                            <a href="/dashboard/users" class="block text-gray-300 hover:text-white">User Manager</a>
                            <a href="/dashboard/product" class="block text-gray-300 hover:text-white">Product Manager</a>
                        @endif
                    @endauth
                @endif
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <div class="relative group hidden sm:block">
                        <button class="text-gray-300 hover:text-white flex items-center space-x-2 focus:outline-none">
                            <span>{{ Auth::user()->name ?? '' }}</span>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <div class="absolute right-0 hidden bg-gray-950 backdrop-blur-lg bg-opacity-90 text-white border border-gray-600 rounded-md mt-2 w-auto shadow-md group-focus-within:block">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-700">Dashboard</a>
                            <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm hover:bg-gray-700">Settings</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-2 text-sm text-left hover:bg-gray-700">Log Out</button>
                            </form>
                        </div>
                    </div>
                    <span class="text-white sm:hidden">{{ Auth::user()->name ?? '' }}</span>
                    @else
                        <a href="{{ route('login') }}" class="block text-gray-300 hover:text-white">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block text-gray-300 hover:text-white">Register</a>
                    @endif
                @endauth

                @auth
                    <a href="{{ route('cart.index') }}" class="relative">
                        <i class="fa-solid fa-cart-shopping text-white"></i>
                        <span class="absolute -top-1 -right-2 text-center bg-red-500 text-white text-xs rounded-full px-1">
                            {{ count(session('cart', [])) }}
                        </span>
                    </a>
                @endauth

                <button id="menu-toggle" class="block sm:hidden text-gray-300 focus:outline-none">
                    <i id="menu-icon" class="fa-solid fa-bars text-2xl text-white"></i>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden sm:hidden bg-transparent bg-opacity-70 p-4">
            <a href="/" class="block text-gray-300 hover:text-white">Home</a>
            <a href="/about" class="text-gray-300 hover:text-white">About</a>
            <a href="/contact" class="block text-gray-300 hover:text-white">Contact</a>
            <hr class="my-3">
            <div class="relative group">
                <button class="text-gray-300 hover:text-white flex items-center space-x-2 focus:outline-none">
                    <span>Products</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <div class="relative w-full hidden group-focus-within:block bg-gray-950 backdrop-blur-lg bg-opacity-90 text-white border border-gray-600 rounded-md mt-2 shadow-md">
                    <div class="grid grid-cols-2 gap-2 px-2 py-2">
                        <a href="/products" class="block px-4 py-2 text-sm hover:bg-gray-700 hover:rounded-md">- All category</a>
                        @foreach (App\Enums\category_id_enum::cases() as $category)
                            <a href="{{ url('/products?category=' . $category->value) }}" class="block px-4 py-2 text-sm hover:bg-gray-700 hover:rounded-md">
                               - {{ $category->value }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <hr class="my-3">
            @auth
                <a href="{{ route('dashboard') }}" class="block text-gray-300 hover:text-white">Dashboard</a>
                @if (Auth::user()->role === 'admin')
                    <a href="/dashboard/users" class="block text-gray-300 hover:text-white">User Manager</a>
                    <a href="/dashboard/product" class="block text-gray-300 hover:text-white">Product Manager</a>
                @endif
                <hr class="my-3">
                <a href="{{ route('profile.edit')}}" class="block text-gray-300 hover:text-white">Settings</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="block text-gray-300 hover:text-white">Log Out</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block text-gray-300 hover:text-white">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block text-gray-300 hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
