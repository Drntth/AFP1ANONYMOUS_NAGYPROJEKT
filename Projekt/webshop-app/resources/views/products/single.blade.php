<x-app-layout>
    <div class="mx-5">
        <div class="mx-auto max-w-6xl shadow-2xl shadow-black rounded-lg backdrop-blur-3xl border-slate-500 border-4">
            <div class="p-4">
                <div class="w-full max-w-lg mx-auto pb-5">
                    <div class="w-full max-w-lg object-contain">
                        @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
                            <a href="{{ asset($product->image) }}" target="_blank">
                                <img class="sm:h-60 mx-auto rounded-lg bg-white border-slate-500 border-4" src="{{ asset($product->image) }}" alt="image">
                            </a>
                        @else
                            <img src="{{ asset('images/default.png') }}" class="sm:h-60 mx-auto rounded-lg border-slate-500 border-4" alt="Image not found">
                        @endif
                    </div>
                </div>
                <div class="rounded-lg bg-white border-slate-500 border-4 p-4">
                    <div class="flex justify-between flex-col lg:space-x-2 lg:space-y-0">
                        <div>
                            <h5 class="text-xl font-bold text-slate-700">{{ $product->name }}</h5>
                            <p class="text-slate-700">{{ Str::limit($product->description, 1000) }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end flex-col lg:space-x-2 lg:space-y-0">
                        <div class="text-end">
                            <p class="text-lg font-semibold text-slate-700 mt-2">Price: {{ $product->price }} ft</p>
                            <p class="text-lg font-semibold text-slate-700">Stock: {{ $product->stock }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between flex-col space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0 pt-5">
                    <a href="/products" class="text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Back</a>
                    <a href="" class="text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
