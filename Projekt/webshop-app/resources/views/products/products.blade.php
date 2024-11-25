<x-app-layout>
    <div class="xl:mx-auto xl:max-w-7xl mx-1">
        <div class="flex flex-col sm:flex-row items-center justify-between mx-4 mt-5 mb-10">
            <p class="text-center sm:text-left pb-10 sm:pb-0 text-white my-auto text-4xl">Products</p>
            <form method="GET" action="{{ route('products.products') }}" class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full sm:w-auto">
                <input type="hidden" name="category" value="{{ request('category', '') }}">
                <select name="sort" onchange="this.form.submit()" class="rounded-md w-full sm:w-auto">
                    <option value="name_asc" {{ request('sort') === 'name_asc' ? 'selected' : '' }}>By Name (A-Z)</option>
                    <option value="name_desc" {{ request('sort') === 'name_desc' ? 'selected' : '' }}>By Name (Z-A)</option>
                    <option value="cheapest" {{ request('sort') === 'cheapest' ? 'selected' : '' }}>Cheapest first</option>
                    <option value="expensive" {{ request('sort') === 'expensive' ? 'selected' : '' }}>Most expensive first</option>
                    <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>Newest first</option>
                    <option value="on_sale" {{ request('sort') === 'on_sale' ? 'selected' : '' }}>On sale first</option>
                </select>
                <select name="per_page" onchange="this.form.submit()" class="rounded-md w-full sm:w-auto">
                    <option value="all" {{ request('per_page') == 'all' ? 'selected' : '' }}>Show all</option>
                    <option value="4" {{ request('per_page') == 4 ? 'selected' : '' }}>4 / page</option>
                    <option value="8" {{ request('per_page') == 8 ? 'selected' : '' }}>8 / page</option>
                    <option value="12" {{ request('per_page') == 12 ? 'selected' : '' }}>12 / page</option>
                    <option value="16" {{ request('per_page') == 16 ? 'selected' : '' }}>16 / page</option>
                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20 / page</option>
                </select>
            </form>
        </div>
        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                <div class="group relative overflow-hidden rounded-lg bg-white shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl flex flex-col">
                    @if ($product->stock <= 3 && $product->stock > 0)
                        <div class="absolute top-2 left-2 bg-red-500 text-white text-sm font-bold px-3 py-1 rounded-full shadow">
                            <p>SALE - {{ number_format((($product->price - $product->sale_price) / $product->price) * 100) }}%</p>
                        </div>
                    @endif
                    @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
                        <img src="{{ asset($product->image) }}" class="h-56 w-full object-cover" alt="Image" />
                    @else
                        <img src="{{ asset('default.png') }}" class="h-56 w-full object-cover" alt="Image" />
                    @endif
                    <div class="p-4 flex flex-col flex-grow">
                        <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>
                        <div class="mt-auto">
                            @if ($product->price == 0)
                                <p class="mt-2 font-semibold text-gray-900">Price: <span class="text-green-600">Free</span></p>
                            @elseif ($product->stock <=3 && $product->stock > 0)
                                <p class="mt-2 font-semibold text-gray-900">
                                    Price: <span class="line-through text-gray-500">{{ $product->price }} €</span>
                                    <span class="text-red-500 font-bold">{{ $product->sale_price }} €</span>
                                </p>
                            @else
                                <p class="mt-2 font-semibold text-gray-900">Price: {{ $product->price }} €</p>
                            @endif
                            <p class="mt-2 font-semibold text-gray-900">Stock: {{ $product->stock }} pcs</p>
                            <a href="/products/{{ $product->id }}"
                                class="block mb-3 mt-3 text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-slate-600">
                                View details
                             </a>
                             @if ($product->stock > 0)
                                 <form action="{{ route('cart.add') }}" method="POST">
                                     @csrf
                                     <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                     <button class="w-full text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-slate-600" type="submit">
                                         Add to cart
                                     </button>
                                 </form>
                             @elseif ($product->stock == 0)
                                 <a class="block text-center text-white px-3 py-1 rounded-md bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-red-500">
                                     Out of stock
                                 </a>
                             @endif
                        </div>
                    </div>
                    <div class="absolute inset-0 border-4 border-transparent group-hover:border-slate-500 transition-colors duration-300 pointer-events-none"></div>
                </div>
            @endforeach
        </div>
    </div>
    @if ($perPage !== 'all')
        @if ($products->lastPage() > 3)
            <div class="flex justify-center items-center space-x-2 mt-6 mx-5">
                @if ($products->onFirstPage())
                    <span class="py-2 w-20 text-sm text-center text-white bg-slate-500 cursor-not-allowed rounded-md">Previous</span>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="py-2 w-20 text-sm text-center bg-slate-500 text-white rounded-md hover:bg-slate-600 transition duration-200">Previous</a>
                @endif
                @if ($products->onFirstPage())
                    <a href="{{ $products->url(1) }}" class="px-4 py-2 text-sm bg-slate-500 text-white hover:bg-slate-600 rounded-md transition duration-200">1</a>
                    <a href="{{ $products->url(2) }}" class="px-4 py-2 text-sm  text-white hover:bg-slate-600 rounded-md transition duration-200">2</a>
                    <span class="px-2 text-sm text-gray-500">...</span>
                    <a href="{{ $products->url($products->lastPage()) }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">{{ $products->lastPage() }}</a>
                @elseif ($products->onLastPage())
                    <a href="{{ $products->url(1) }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">1</a>
                    <span class="px-2 text-sm text-gray-500">...</span>
                    <a href="{{ $products->url($products->lastPage()-1) }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">{{ $products->lastPage()-1 }}</a>
                    <span class="px-4 py-2 text-sm font-semibold text-white bg-slate-500 rounded-md">{{ $products->lastPage() }}</span>
                @else
                    @if ($products->currentPage() > 1)
                        <a href="{{ $products->url(1) }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">1</a>
                    @endif
                    @if ($products->currentPage() > 2)
                        <span class="px-2 text-sm text-gray-500">...</span>
                    @endif
                    <span class="px-4 py-2 text-sm font-semibold text-white bg-slate-500 rounded-md">{{ $products->currentPage() }}</span>
                    @if ($products->currentPage() < $products->lastPage() - 1)
                        <span class="px-2 text-sm text-gray-500">...</span>
                    @endif
                    @if ($products->currentPage() != $products->lastPage())
                        <a href="{{ $products->url($products->lastPage()) }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">{{ $products->lastPage() }}</a>
                    @endif
                @endif
                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="py-2 w-20 text-sm text-center bg-slate-500 text-white rounded-md hover:bg-slate-600 transition duration-200">Next</a>
                @else
                    <span class="py-2 w-20 text-sm text-center text-white bg-slate-500 cursor-not-allowed rounded-md">Next</span>
                @endif
            </div>
        @else
            <div class="flex justify-center items-center space-x-2 mt-6 mx-5">
                @if ($products->onFirstPage())
                    <span class="py-2 w-20 text-sm text-center text-white bg-slate-500 cursor-not-allowed rounded-md">Previous</span>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="py-2 w-20 text-sm text-center bg-slate-500 text-white rounded-md hover:bg-slate-600 transition duration-200">Previous</a>
                @endif
                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    @if ($page == $products->currentPage())
                        <span class="px-4 py-2 text-sm font-semibold text-white bg-slate-500 rounded-md">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 text-sm text-white hover:bg-slate-600 rounded-md transition duration-200">{{ $page }}</a>
                    @endif
                @endforeach
                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="py-2 w-20 text-sm text-center bg-slate-500 text-white rounded-md hover:bg-slate-600 transition duration-200">Next</a>
                @else
                    <span class="py-2 w-20 text-sm text-center text-white bg-slate-500 cursor-not-allowed rounded-md">Next</span>
                @endif
            </div>
        @endif
        <p class="text-center text-sm text-white mx-5 mt-5">
            Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results
            ({{ request('per_page', 'all') }} products per page).
        </p>
    @endif
</x-app-layout>
