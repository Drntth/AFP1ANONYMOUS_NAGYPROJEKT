<x-app-layout>
    <div class="flex justify-between max-w-4xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Payment Information</h1>
        <a href="{{ route('checkout.shipping') }}" class="text-2xl font-bold text-gray-300 hover:text-white">Back to Shipping Information</a>
    </div>
    <div class="max-w-4xl mx-auto py-8 bg-white p-6 shadow-lg rounded-lg">
        <form action="{{ route('checkout.payment.handle') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <div class="flex flex-col">
                    <label for="card_number" class="text-lg text-black">Credit Card Owner</label>
                    <input type="text" name="card_owner" id="card_owner" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                </div>

                <div class="flex flex-col">
                    <label for="card_number" class="text-lg text-black">Credit Card Number</label>
                    <input type="text" name="card_number" id="card_number" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                </div>

                <div class="flex flex-col">
                    <label for="expiration" class="text-lg text-black">Expiration Date</label>
                    <input type="text" name="expiration" id="expiration" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                </div>

                <div class="flex flex-col">
                    <label for="cvv" class="text-lg text-black">CVV</label>
                    <input type="text" name="cvv" id="cvv" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <h3 class="text-xl font-bold text-black">Total: <span id="total-price">€{{ number_format($order->total_price, 2) }}</span></h3>
                    <button type="submit" class="bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out">
                        Complete Payment
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
