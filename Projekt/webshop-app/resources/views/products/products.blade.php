<x-app-layout>
    <p class="text-center text-white my-auto text-4xl mt-5 mb-10">Products</p>
    <div class="xl:mx-auto xl:max-w-7xl">
        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
            <!-- components/product-card.blade.php -->
            <x-product-card :product="$product"></x-product-card>
            @endforeach
        </div>
    </div>
</x-app-layout>
