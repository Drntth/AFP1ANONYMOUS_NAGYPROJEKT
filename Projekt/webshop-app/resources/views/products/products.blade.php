<x-app-layout>
    <p class="text-center text-white my-auto text-4xl mt-5 mb-10">Products</p>
    <div class="xl:mx-auto xl:max-w-7xl">
        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
            <div class="group relative overflow-hidden rounded-lg bg-white shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                <img src="{{ asset($product->image) }}" class="h-56 w-full object-cover" alt="Image" />
                <div class="p-4">
                    <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>
                    <p class="mt-2 font-semibold text-gray-900">Price: {{ $product->price }} €</p>
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
                        <a class="block mb-3 mt-3 text-center text-white px-3 py-1 rounded-md bg-red-400 hover:bg-red-500 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-red-500">
                            Out of stock
                        </a>
                    @endif
                </div>
                <div class="absolute inset-0 border-4 border-transparent group-hover:border-slate-500 transition-colors duration-300 pointer-events-none"></div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
