<x-app-layout>

    <p class="text-center text-white my-auto text-4xl mt-5 mb-10">Low Stock Products</p>
    <div class="xl:mx-auto xl:max-w-7xl">

        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5">
            <div class="relative">
                <div class="overflow-hidden">
                    <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                        @foreach ($products as $product)
                        @php
                        $random = rand(1, 50);
                        $badge_text = 'AKCIÓ -' . $random . '%';
                        @endphp
                        @if ($product->stock <= 3 && $product->stock > 0)
                            <div class="flex-shrink-0 w-full">
                                <x-product-card :product="$product" :badge="$badge_text" :discount="$random"></x-product-card>
                            </div>
                            @endif
                            @endforeach
                    </div>
                </div>

                <div class="absolute top-1/2 left-0 transform -translate-y-1/2 z-10">
                    <button id="prevBtn" class="bg-gray-800 text-white p-2 rounded-full cursor-pointer hover:bg-gray-600">Prev</button>
                </div>
                <div class="absolute top-1/2 right-0 transform -translate-y-1/2 z-10">
                    <button id="nextBtn" class="bg-gray-800 text-white p-2 rounded-full cursor-pointer hover:bg-gray-600">Next</button>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- szimuláljuk a leárazás értékét, adatbázisba lehetne lementeni -->
            @foreach ($products as $product)
            @php
            $random = rand(1, 50);
            $badge_text = 'AKCIÓ -' . $random . '%';
            @endphp
            @if ($product->stock <= 3 && $product->stock > 0)
                <x-product-card :product="$product" :badge="$badge_text" :discount="$random"></x-product-card>
                @endif
                @endforeach
        </div>
    </div>

</x-app-layout>