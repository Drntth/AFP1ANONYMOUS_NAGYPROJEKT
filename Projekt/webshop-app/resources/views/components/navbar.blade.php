<div class="bg-gray-950 backdrop-blur-lg bg-opacity-40 p-4">
    @if (Route::has('login'))
        <nav class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-6">
                <a href="#" class="text-white text-lg font-semibold">Webshop</a>

                <a href="#" class="text-gray-300 hover:text-white">Home</a>
                <a href="#" class="text-gray-300 hover:text-white">Products</a>
                <a href="#" class="text-gray-300 hover:text-white">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('dashboard') }}" class="text-gray-300 hover:text-white">Dashboard</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:text-white">Log Out</button>
                    </form>
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
