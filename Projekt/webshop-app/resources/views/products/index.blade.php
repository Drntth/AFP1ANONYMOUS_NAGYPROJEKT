<x-app-layout>
<div class="mx-5">
    <div class="flex justify-between max-w-6xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{route('product.add')}}" class="px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Add a new Product</a>
    </div>
    <div class="flex justify-center">
        <form method="GET" action="{{ route('product.index') }}">
            <select name="category" onchange="this.form.submit()" class="rounded-md w-full sm:w-auto">
                <option value="">Összes kategória</option>
                @foreach (\App\Enums\category_id_enum::cases() as $category)
                    <option value="{{ $category->value }}"
                        {{ request('category') == $category->value ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
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
    <div>
        <div>
            <div class="max-w-6xl mx-auto">
                <div>
                @foreach ($products as $product)
                <div class="py-6">
                <div class="bg-white flex items-start p-4 rounded-lg shadow-lg md-4">
                    <div class="w-32 h-32 overflow-hidden bg-white flex items-center justify-center rounded-md border-slate-500 border-4">
                        @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
                            <a href="{{ asset($product->image) }}" target="_blank">
                                <img class="b-4" src="{{ asset($product->image) }}" alt="image">
                            </a>
                        @else
                            <img src="{{ asset('default.png') }}" class="b-4" alt="Image not found">
                        @endif
                    </div>
                    <div class="ml-4 flex-1 flex flex-col space-y-4">
                        <h2 class="text-lg font-bold">Name: {{$product->name}}</h2>
                        <p class="text-sm text-gray-600">Description: {{$product->description}}</p>
                        <p class="text-xs text-gray-500">Category: {{$product->category_id}}</p>
                        <p class="text-xs text-gray-500 mt-auto">Stock: {{$product->stock}} pcs</p>
                        <p class="text-xs text-gray-500 mt-auto">Sale price: {{$product->sale_price}} €</p>
                    </div>
                    <div class="ml-auto text-lg font-bold flex-0 flex flex-col space-y-16">
                        <div class="text-right">Price: {{$product->price}} €</div>
                        <div class="flex space-x-2 mt-auto">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="bg-slate-500 text-white px-3 py-1 rounded-md hover:bg-slate-600">Edit</a>
                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
                </div>
            </div>
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
</div>
</x-app-layout>
