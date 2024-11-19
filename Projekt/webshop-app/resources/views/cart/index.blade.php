<x-app-layout>
    <div class="flex justify-between max-w-4xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Cart</h1>
    </div>
    <div class="max-w-4xl mx-auto py-6">
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                    <div class="flex items-center justify-between">
                        <div class="text-md text-gray-950">
                            <h3 class="font-semibold">{{ $details['name'] }}</h3>
                        </div>
                        <div class="text-md text-gray-950">
                            <span class="font-semibold">Price: {{ $details['price'] }} €</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-semibold">Quantity: </span>
                            <form action="{{ route('cart.update') }}" method="POST" class="flex items-center space-x-2">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $id }}">
                                <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="border-gray-300 rounded-md p-1 w-16 text-center">
                                <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Update</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $id }}">
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
        @endforeach
            <div class="bg-white p-4 rounded-lg shadow-lg text-center text-md text-gray-950 font-semibold">
                Total: <span class="">{{ array_sum(array_column(session('cart'), 'price')) }} €</span>
            </div>
        @else
            <div class="bg-white p-4 rounded-lg shadow-lg text-center text-md text-gray-950 font-semibold">
                Your cart is empty!
            </div>
        @endif
    </div>
</x-app-layout>
