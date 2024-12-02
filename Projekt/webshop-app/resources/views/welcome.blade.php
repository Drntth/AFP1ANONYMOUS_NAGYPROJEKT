<x-app-layout>
    <p class="text-center text-white my-auto text-4xl mt-5 mb-10">On Sale Products</p>
    <div class="xl:mx-auto xl:max-w-7xl">
        <div class="hidden xl:block container mx-auto px-4 grid-cols-1 mb-14">
            <div class="relative bg-slate-500 rounded-lg flex items-center">
                <div class="z-10">
                    <button id="prevBtn" class="bg-slate-500 text-white w-10 h-10 flex items-center justify-center rounded-full shadow-all-sides cursor-pointer hover:bg-slate-600 focus:outline-none transition ml-2 mr-2">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                </div>
                <div class="flex-grow overflow-hidden flex justify-center items-center">
                    <div id="slider" class="flex">
                        @foreach ($products as $product)
                            @if ($product->stock <= 3 || $product->stock > 0)
                                <div class="flex-shrink-0 w-full text-center">
                                    <x-slider-card :product="$product"></x-slider-card>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="z-10">
                    <button id="nextBtn" class="bg-slate-500 text-white w-10 h-10 flex items-center justify-center rounded-full shadow-all-sides cursor-pointer hover:bg-slate-600 focus:outline-none transition ml-2 mr-2">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 grid grid-cols-1 gap-10 mb-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                @if ($product->stock <= 3 && $product->stock > 0)
                    <x-product-card :product="$product"></x-product-card>
                @endif
            @endforeach
        </div>
    </div>
</x-app-layout>
