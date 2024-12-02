@props(['product'])

<div class="group relative overflow-hidden bg-white flex flex-row h-96">
    <div class="absolute top-2 left-2 bg-red-500 text-white text-sm font-bold px-3 py-1 rounded-full shadow">
        <p>SALE - {{ number_format((($product->price - $product->sale_price) / $product->price) * 100) }}%</p>
    </div>
    <div class="flex-shrink-0 w-1/2 h-full">
        @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
        <img src="{{ asset($product->image) }}" class="h-full w-full object-cover" alt="Image" />
        @else
        <img src="{{ asset('default.png') }}" class="h-full w-full object-cover" alt="Image" />
        @endif
    </div>
    <div class="flex-grow flex flex-col lg:p-4 w-1/2 mr-5 lg:mr-0 h-full">
        <div class="flex-grow flex flex-col justify-start mt-5 lg:mt-0">
            <h5 class="text-xl font-bold text-gray-800 text-left">{{ $product->name }}</h5>
            <p class="text-md text-gray-800 text-left mt-2">{{ Str::limit($product->description, 400) }}</p>
        </div>
        <div class="flex justify-end items-end mt-4">
            <div>
                @if ($product->price == 0)
                    <p class="mt-2 font-semibold text-gray-900">Price: <span class="text-green-500">Free</span></p>
                @elseif ($product->stock <=3 && $product->stock > 0)
                    <p class="mt-2 font-semibold text-gray-900">
                        Price: <span class="line-through text-gray-500">{{ $product->price }} €</span>
                        <span class="text-red-500 font-bold">{{ $product->sale_price }} €</span>
                    </p>
                @else
                    <p class="mt-2 font-semibold text-gray-900">Price: {{ $product->price }} €</p>
                @endif
                <p class="font-semibold text-gray-900 text-right mb-5">Stock: {{ $product->stock }} pcs</p>
            </div>
        </div>
        <div class="mt-auto flex flex-col mb-5 lg:mb-0">
            <a href="/products/{{ $product->id }}"
                class="block mb-3 text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-slate-600">
                View details
            </a>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <button class="w-full text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent active:bg-slate-600" type="submit">
                    Add to cart
                </button>
            </form>
        </div>
    </div>
</div>
