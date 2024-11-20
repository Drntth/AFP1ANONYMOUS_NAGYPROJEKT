<x-app-layout>
    <p class="text-center text-white my-auto text-4xl mt-5 mb-10">On Sale Products</p>
    <div class="xl:mx-auto xl:max-w-7xl">
        <div class="hidden md:block container mx-auto px-4 grid-cols-1 mb-14">
            <div class="relative">
                <!-- Bal oldali gomb -->
                <div class="absolute top-1/2 left-2 transform -translate-y-1/2 z-10">
                    <button id="prevBtn" class="bg-slate-500 text-white w-10 h-10 flex items-center justify-center rounded-full shadow-md cursor-pointer hover:bg-slate-600 focus:outline-none transition">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                </div>

                <!-- Csúszka tartalma -->
                <div class="overflow-hidden flex justify-center items-center">
                    <div id="slider" class="flex">
                        @foreach ($products as $product)
                            @php
                                $random = rand(1, 30);
                                $badge_text = 'SALE -' . $random . '%';
                            @endphp
                            @if ($product->stock <= 3 || $product->stock = 0)
                                <div class="flex-shrink-0 w-full text-center">
                                    <x-slider-card :product="$product" :badge="$badge_text" :discount="$random"></x-slider-card>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Jobb oldali gomb -->
                <div class="absolute top-1/2 right-2 transform -translate-y-1/2 z-10">
                    <button id="nextBtn" class="bg-slate-500 text-white w-10 h-10 flex items-center justify-center rounded-full shadow-md cursor-pointer hover:bg-slate-600 focus:outline-none transition">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- szimuláljuk a leárazás értékét, adatbázisba lehetne lementeni -->
        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                @php
                    $random = rand(1, 30);
                    $badge_text = 'SALE -' . $random . '%';
                @endphp
                @if ($product->stock <= 3 && $product->stock > 0)
                    <x-product-card :product="$product" :badge="$badge_text" :discount="$random"></x-product-card>
                @endif
            @endforeach
        </div>
    </div>
</x-app-layout>
