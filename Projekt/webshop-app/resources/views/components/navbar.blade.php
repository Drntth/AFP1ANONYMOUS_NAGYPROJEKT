<div class="bg-gray-950 backdrop-blur-lg bg-opacity-50 p-4">
    @if (Route::has('login'))
    <nav class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-6">

            @if ($isMainPage)
                <a href="/" class="text-white text-2xl font-semibold">Webshop</a>
            @elseif ($isDashboard)
                <a href="/dashboard" class="text-white text-2xl font-semibold">Dashboard</a>
            @endif

            <a href="/" class="text-gray-300 hover:text-white">Home</a>

            @if ($isMainPage)
                <a href="/products" class="text-gray-300 hover:text-white">Products</a>
                <a href="/contact" class="text-gray-300 hover:text-white">Contact</a>
            @elseif ($isDashboard)
                @auth
                    @if (Auth::user()->role === 'admin')
                    <a href="/dashboard/product" class="text-gray-300 hover:text-white">Product Manager</a>
                    <a href="/dashboard/users" class="text-gray-300 hover:text-white">User Manager</a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="flex items-center space-x-4">
            @auth
            <div class="relative group">
                <button class="text-gray-300 hover:text-white flex items-center space-x-2 focus:outline-none">
                    <span>{{ Auth::user()->name }}</span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="absolute right-0 hidden bg-gray-950 backdrop-blur-lg bg-opacity-70 text-white border border-gray-600 rounded-md mt-2 w-auto shadow-md group-focus-within:block">
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-700">Dashboard</a>
                    <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm hover:bg-gray-700">Settings</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="block w-full px-4 py-2 text-sm text-left hover:bg-gray-700">Log Out</button>
                    </form>
                </div>
            </div>
            <a href="{{ route('cart.index') }}">
                <i class="fa-solid fa-cart-shopping text-white"></i>
                <span class="text-white">{{ count(session('cart', [])) }}</span>
            </a>
            @else
                <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Register</a>
            @endif
            @endauth
        </div>
    </nav>
    @endif
</div>
