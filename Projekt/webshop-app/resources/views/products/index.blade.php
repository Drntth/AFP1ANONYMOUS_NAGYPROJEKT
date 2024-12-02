<x-app-layout>
<div class="mx-5">
    <div class="flex justify-between max-w-6xl mx-auto text-white pt-4">
        <h1 class="text-3xl font-bold">Products</h1>
        <a href="{{route('product.add')}}" class="px-3 py-2 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Add a new Product</a>
    </div>
    <div class="max-w-6xl mx-auto pt-9 pb-3">
        <div x-data="{sortOpen: false,perPageOpen: false,sortSelected: '{{ request('sort', 'name_asc') }}',perPageSelected: '{{ request('per_page', 'all') }}'}" class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full">
            <form id="filterForm" method="GET" action="{{ route('product.index') }}" class="w-full flex flex-col sm:flex-row sm:justify-between gap-4 sm:gap-6">
                <input type="hidden" name="category" id="categoryInput" value="{{ request('category') }}">
                <input type="hidden" name="sort" x-model="sortSelected">
                <input type="hidden" name="per_page" x-model="perPageSelected">
                <div x-data="{ categoryOpen: false }" class="relative w-full sm:w-52">
                    <div @click="categoryOpen = !categoryOpen" class="appearance-none block w-full rounded-md border-2 cursor-pointer focus:border-slate-600 focus:ring-slate-600 px-4 py-1 text-gray-700 bg-white">
                        <div class="flex items-center justify-between">
                            <span>
                                {{ collect(\App\Enums\category_id_enum::cases())->firstWhere('value', request('category'))?->name ?? 'All category' }}
                            </span>
                            <i :class="categoryOpen ? 'fa-square-caret-up' : 'fa-square-caret-down'" class="fa-regular fa-square-caret-down text-2xl text-slate-500"></i>
                        </div>
                    </div>
                    <div x-show="categoryOpen" @click.away="categoryOpen = false"
                         class="absolute mt-1 w-full rounded-md shadow-all-sides bg-white z-10 p-1"
                         x-cloak>
                        <div class="max-h-40 overflow-y-auto">
                            <div @click="categoryOpen = false; document.getElementById('categoryInput').value=''; document.getElementById('filterForm').submit()" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">All category</div>
                            @foreach (\App\Enums\category_id_enum::cases() as $category)
                                <div @click="categoryOpen = false; document.getElementById('categoryInput').value='{{ $category->value }}'; document.getElementById('filterForm').submit()" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">{{ $category->name }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="relative w-full sm:w-52">
                    <div @click="sortOpen = !sortOpen" class="appearance-none block w-full rounded-md border-2 cursor-pointer focus:border-slate-600 focus:ring-slate-600 px-4 py-1 text-gray-700 bg-white">
                        <div class="flex items-center justify-between">
                            <span x-text="{'name_asc': 'By Name (A-Z)','name_desc': 'By Name (Z-A)','cheapest': 'Cheapest first','expensive': 'Most expensive first','newest': 'Newest first','on_sale': 'On sale first'}[sortSelected]"></span>
                            <i :class="sortOpen ? 'fa-square-caret-up' : 'fa-square-caret-down'" class="fa-regular fa-square-caret-down text-2xl text-slate-500"></i>
                        </div>
                    </div>
                    <div x-show="sortOpen" @click.away="sortOpen = false" class="absolute mt-1 w-full rounded-md shadow-all-sides bg-white z-10 p-1">
                        <div class="max-h-40 overflow-y-auto">
                            <div @click="sortSelected = 'name_asc'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">By Name (A-Z)</div>
                            <div @click="sortSelected = 'name_desc'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">By Name (Z-A)</div>
                            <div @click="sortSelected = 'cheapest'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">Cheapest first</div>
                            <div @click="sortSelected = 'expensive'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">Most expensive first</div>
                            <div @click="sortSelected = 'newest'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">Newest first</div>
                            <div @click="sortSelected = 'on_sale'; sortOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">On sale first</div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full sm:w-52">
                    <div @click="perPageOpen = !perPageOpen" class="appearance-none block w-full rounded-md border-2 cursor-pointer focus:border-slate-600 focus:ring-slate-600 px-4 py-1 text-gray-700 bg-white">
                        <div class="flex items-center justify-between">
                            <span x-text="{'all': 'Show all','4': '4 / page','8': '8 / page','12': '12 / page','16': '16 / page','20': '20 / page'}[perPageSelected]"></span>
                            <i :class="perPageOpen ? 'fa-square-caret-up' : 'fa-square-caret-down'" class="fa-regular fa-square-caret-down text-2xl text-slate-500"></i>
                        </div>
                    </div>
                    <div x-show="perPageOpen" @click.away="perPageOpen = false" class="absolute mt-1 w-full rounded-md shadow-all-sides bg-white z-10 p-1">
                        <div class="max-h-40 overflow-y-auto">
                            <div @click="perPageSelected = 'all'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">Show all</div>
                            <div @click="perPageSelected = '4'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">4 / page</div>
                            <div @click="perPageSelected = '8'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">8 / page</div>
                            <div @click="perPageSelected = '12'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">12 / page</div>
                            <div @click="perPageSelected = '16'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">16 / page</div>
                            <div @click="perPageSelected = '20'; perPageOpen = false; $nextTick(() => document.getElementById('filterForm').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">20 / page</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
        <div>
            <div class="max-w-6xl mx-auto">
                <div>
                @foreach ($products as $product)
                <div class="py-6">
                <div class="bg-white rounded-lg shadow-lg">
                <div class="flex items-start p-4">
                    <div class="w-32 h-32 overflow-hidden bg-white flex items-center justify-center rounded-md border-slate-500 border-4">
                        @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
                            <a href="{{ asset($product->image) }}" target="_blank">
                                <img class="b-4" src="{{ asset($product->image) }}" alt="image">
                            </a>
                        @else
                            <img src="{{ asset('default.png') }}" class="b-4" alt="Image not found">
                        @endif
                    </div>
                    <div class="hidden md:block mx-4 flex-1">
                        <div class="flex flex-col justify-between h-32">
                            <h2 class="text-md font-bold">Name: {{$product->name}}</h2>
                            <p class="text-sm text-justify text-gray-600 line-clamp-4">Description: {{$product->description}}</p>
                        </div>
                    </div>
                    <div class="ml-auto text-lg font-bold flex-0 flex flex-col md:pl-4 md:border-l-2 md:border-slate-500">
                        <div class="text-right">Price: {{$product->price}} €</div>
                        <p class="text-xs text-gray-500 mt-1">Stock: {{$product->stock}} pcs</p>
                        <p class="text-xs text-gray-500 mt-1">Sale price: {{$product->sale_price}} €</p>
                        <p class="text-xs text-gray-500 mt-1">Category: {{$product->category_id}}</p>
                        <div class="flex space-x-2 mt-1">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="bg-slate-500 text-white px-3 py-1 rounded-md hover:bg-slate-600">Edit</a>
                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="md:hidden mx-4 flex-1 flex-col space-y-2">
                    <h2 class="text-lg font-bold">Name: {{$product->name}}</h2>
                    <p class="text-sm text-justify text-gray-600 pb-5">Description: {{$product->description}}</p>
                </div>
                </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @if ($perPage !== 'all')
        @if ($products->lastPage() > 1)
            <div class="flex justify-center items-center space-x-1 mt-4 mx-3">
                @if ($products->onFirstPage())
                    <span class="inline-flex items-center justify-center w-8 h-8 text-slate-300 text-sm cursor-not-allowed border-2 border-slate-400 rounded-full">
                        <i class="fa-solid fa-angles-left"></i>
                    </span>
                @else
                    <a href="{{ $products->url(1) }}" class="flex items-center justify-center w-8 h-8 text-slate-300 text-sm border-2 border-slate-400 rounded-full hover:text-slate-500 hover:border-slate-500">
                        <i class="fa-solid fa-angles-left"></i>
                    </a>
                @endif
                @if ($products->onFirstPage())
                    <span class="inline-flex items-center justify-center w-8 h-8 text-slate-300 text-sm cursor-not-allowed border-2 border-slate-400 rounded-full">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="flex items-center justify-center w-8 h-8 text-slate-300 text-sm border-2 border-slate-400 rounded-full hover:text-slate-500 hover:border-slate-500">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                @endif
                @php
                    $start = max(1, $products->currentPage() - 2);
                    $end = min($products->lastPage(), $products->currentPage() + 2);
                    if ($products->currentPage() <= 2) {
                        $end = min(5, $products->lastPage());
                    } elseif ($products->currentPage() > $products->lastPage() - 2) {
                        $start = max($products->lastPage() - 4, 1);
                    }
                @endphp
                @foreach (range($start, $end) as $page)
                    @if ($page == $products->currentPage())
                        <span class="w-10 h-10 flex items-center justify-center font-semibold text-white bg-slate-500 rounded-full">{{ $page }}</span>
                    @else
                        <a href="{{ $products->url($page) }}" class="w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white hover:bg-slate-600 rounded-full">{{ $page }}</a>
                    @endif
                @endforeach
                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="flex items-center justify-center w-8 h-8 text-slate-300 text-sm border-2 border-slate-400 rounded-full hover:text-slate-500 hover:border-slate-500">
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                @else
                    <span class="inline-flex items-center justify-center w-8 h-8 text-slate-300 text-sm cursor-not-allowed border-2 border-slate-400 rounded-full">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                @endif
                @if ($products->hasMorePages())
                    <a href="{{ $products->url($products->lastPage()) }}" class="flex items-center justify-center w-8 h-8 text-slate-300 text-sm border-2 border-slate-400 rounded-full hover:text-slate-500 hover:border-slate-500">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>
                @else
                    <span class="inline-flex items-center justify-center w-8 h-8 text-slate-300 text-sm cursor-not-allowed border-2 border-slate-400 rounded-full">
                        <i class="fa-solid fa-angles-right"></i>
                    </span>
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
