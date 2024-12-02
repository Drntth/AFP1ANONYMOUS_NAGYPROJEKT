<x-app-layout>
    <div class="xl:mx-auto xl:max-w-7xl container mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between px-5 mt-5 mb-10">
            <p class="text-center sm:text-left pb-10 sm:pb-0 text-white my-auto text-4xl">Products</p>
            <div>
                <div x-data="{sortOpen: false,perPageOpen: false,sortSelected: '{{ request('sort', 'name_asc') }}',perPageSelected: '{{ request('per_page', 'all') }}'}" class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full">
                    <form id="filterForm" method="GET" action="{{ route('products.products') }}" class="w-full sm:w-auto flex flex-col sm:flex-row gap-4 sm:gap-6">
                        <input type="hidden" name="category" value="{{ request('category', '') }}">
                        <input type="hidden" name="sort" x-model="sortSelected">
                        <input type="hidden" name="per_page" x-model="perPageSelected">
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
        </div>
        <div class="container mx-auto px-5 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
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
</x-app-layout>
