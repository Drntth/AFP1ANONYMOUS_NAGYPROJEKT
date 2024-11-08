<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ( $products as $product)
        @if ($product->stock > 0)
        <div class="max-w-xs mx-auto bg-white rounded-lg shadow-lg overflow-hidden hover:border-2 hover:max-w-s">
            <!-- Product Image -->
            <img src="{{ $product->image }}" class="w-full h-56 object-cover" alt="{{ $product->name }}">

            <div class="p-4">
                <!-- Product Name -->
                <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>

                <!-- Product Description -->
                <p class="text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>

                <!-- Product Price -->
                <p class="text-lg font-semibold text-gray-900 mt-2">Ár: {{ $product->price }} ft</p>
                <p class="text-lg font-semibold text-gray-900 mt-2">Raktáron: {{ $product->stock }}</p>
                <a href="/product/{{ $product->id}}">
                    Megtekintés
                </a>
            </div>
        </div>
        @endif
        @endforeach
</x-app-layout>
