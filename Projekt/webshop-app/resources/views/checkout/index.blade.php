<x-app-layout>
    <div class="flex justify-between max-w-4xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Checkout</h1>
        <a href="{{ route('cart.index') }}" class="text-2xl font-bold text-gray-300 hover:text-white">Back to Cart</a>
    </div>
    <div class="max-w-4xl mx-auto py-6">
        @if(session('cart'))
            <div class="bg-white p-4 shadow-lg rounded-lg">
                @foreach(session('cart') as $id => $details)
                    <div class="border-b-2 border-black p-4">
                        <div class="flex items-center justify-between">
                            <div class="text-md text-gray-950 w-2/5">
                                <h3 class="font-semibold">{{ $details['name'] }}</h3>
                            </div>
                            <div class="text-md text-gray-950">
                                <span class="font-semibold">Price: {{ $details['price'] }} €</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="font-semibold">Quantity: {{ $details['quantity'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="border-t-4 border-black p-4 flex justify-between items-center">
                    <div class="text-xl text-gray-950 font-semibold">
                        Total: <span>{{ array_sum(array_column(session('cart'), 'price')) }} €</span>
                    </div>
                    <a href="{{ route('checkout.shipping') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-800">
                        Confirm Order
                    </a>
                </div>
            </div>
        @else
            <div class="bg-white p-4 rounded-lg shadow-lg text-center text-md text-gray-950 font-semibold">
                Your cart is empty!
            </div>
        @endif
    </div>
</x-app-layout>
