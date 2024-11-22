<x-app-layout>
<div class="mx-5">
    <div class="flex justify-between max-w-6xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{route('product.add')}}" class="px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Add a new Product</a>
      </div>
    <div>
        <div>
            <div class="max-w-6xl mx-auto">
                <div>
                @foreach ($products as $product)
                <div class="py-6">
                <div class="bg-white flex items-start p-4 rounded-lg shadow-lg md-4">
                    <div class="w-32 h-32 overflow-hidden bg-white flex items-center justify-center rounded-md border-slate-500 border-4">
                        @if (File::exists(base_path('public/' . $product->image)) && !empty($product->image))
                            <a href="{{ asset($product->image) }}" target="_blank">
                                <img class="b-4" src="{{ asset($product->image) }}" alt="image">
                            </a>
                        @else
                            <img src="{{ asset('default.png') }}" class="b-4" alt="Image not found">
                        @endif
                    </div>
                    <div class="ml-4 flex-1 flex flex-col space-y-4">
                        <h2 class="text-lg font-bold">Name: {{$product->name}}</h2>
                        <p class="text-sm text-gray-600">Description: {{$product->description}}</p>
                        <p class="text-xs text-gray-500">Category: {{$product->category_id}}</p>
                        <p class="text-xs text-gray-500 mt-auto">Stock: {{$product->stock}} pcs</p>
                        <p class="text-xs text-gray-500 mt-auto">Sale price: {{$product->sale_price}} €</p>
                    </div>
                    <div class="ml-auto text-lg font-bold flex-0 flex flex-col space-y-16">
                        <div class="text-right">Price: {{$product->price}} €</div>
                        <div class="flex space-x-2 mt-auto">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="bg-slate-500 text-white px-3 py-1 rounded-md hover:bg-slate-600">Edit</a>
                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
