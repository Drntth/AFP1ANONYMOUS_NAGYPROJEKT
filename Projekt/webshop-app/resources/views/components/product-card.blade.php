@props(['product'])

@if ($product->stock > 0)
    <div class="max-w-xs mx-auto bg-white rounded-lg shadow-lg overflow-hidden hover:border-2 hover:max-w-s">
        <img src="{{ $product->image }}" class="w-full h-56 object-cover" alt="{{ $product->name }}">
        <div class="p-4 relative">
            <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>
            <p class="text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>
            <p class="text-lg font-semibold text-gray-900 mt-2">Ár: {{ $product->price }} ft</p>
            <p class="text-lg font-semibold text-gray-900 mt-2">Raktáron: {{ $product->stock }}</p>
            <a href="/product/{{ $product->id }}">
                Megtekintés
            </a>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="absolute bottom-4 right-4 hover:bg-green-500 rounded p-1" type="submit">
                    <i class="fa-solid fa-cart-shopping "></i>
                </button>
            </form>
        </div>
    </div>
@endif