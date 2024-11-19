<x-app-layout>
    <div class="flex justify-between max-w-4xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Shipping Information</h1>
        <a href="{{ route('checkout') }}" class="text-2xl font-bold text-gray-300 hover:text-white">Back to Checkout</a>
    </div>
    <div class="max-w-4xl mx-auto py-8 bg-white p-6 shadow-lg rounded-lg flex justify-center items-center">
        <div class="w-full">
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <div class="flex flex-col">
                        <label for="name" class="text-lg text-black">Full Name</label>
                        <input type="text" name="name" id="name" class="border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="address" class="text-lg text-black">Address</label>
                        <input type="text" name="address" id="address" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="city" class="text-lg text-black">City</label>
                        <input type="text" name="city" id="city" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="postal_code" class="text-lg text-black">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="border border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="phone" class="text-lg text-black">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="borderborder-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex justify-center mt-6">
                        <a href="{{ route('checkout.payment') }}" class="bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out">
                            Go to Payment
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
