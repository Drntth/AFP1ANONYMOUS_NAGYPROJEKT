@props(['product'])
@props(['badge' => ""])
@props(['discount' => 0])

@php
    $price = $product->price;
    if($discount){
        $price = (100 - intval($discount)) * ($product->price / 100);
    }
@endphp

<div class="group relative overflow-hidden rounded-lg bg-white shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl flex flex-col">
    @if($badge != "")
    <div class="absolute top-2 left-2 bg-red-500 text-white text-sm font-bold px-3 py-1 rounded-full shadow">
        <p>{{$badge}}</p>
    </div>
    @endif
    @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image)) 
    <img src="{{ asset($product->image) }}" class="h-56 w-full object-cover" alt="Image" />
    @else
    <img src="{{ asset('default.png') }}" class="h-56 w-full object-cover" alt="Image" />
    @endif
    <div class="p-4 flex flex-col flex-grow">
        <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>
        <p class="mt-2 font-semibold text-gray-900">Price: {{ $price }} €</p>
        <p class="mt-2 font-semibold text-gray-900">Stock: {{ $product->stock }} pcs</p>
        <div class="mt-auto">
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
    </div>
    <div class="absolute inset-0 border-4 border-transparent group-hover:border-slate-500 transition-colors duration-300 pointer-events-none"></div>
</div>