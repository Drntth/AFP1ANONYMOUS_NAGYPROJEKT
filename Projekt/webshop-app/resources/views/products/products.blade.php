<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</x-app-layout>
