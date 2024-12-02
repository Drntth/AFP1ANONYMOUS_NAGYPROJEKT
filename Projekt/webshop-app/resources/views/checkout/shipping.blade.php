<x-app-layout>
    <div class="flex justify-between max-w-4xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Shipping & Payment Information</h1>
        <a href="{{ route('checkout.index') }}" class="text-2xl font-bold text-gray-300 hover:text-white">Back to Checkout</a>
    </div>
    <div class="max-w-4xl mx-auto py-8 bg-white p-6 shadow-lg rounded-lg">
        <form action="{{ route('checkout.shipping.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <div>
                    <div class="flex flex-col">
                        <label for="name" class="text-lg text-black">Full Name</label>
                        <input type="text" name="name" id="name" class="border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="name" class="text-lg text-black">Email Address</label>
                        <input type="text" name="email" id="email" class="border-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
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
                        <input type="text" name="phone_number" id="phone_number" class="borderborder-gray-600 rounded-md p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-black mb-4">Shipping Method</h2>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input type="radio" name="shipping_method" id="standard" value="standard" class="mr-2" required>
                            <label for="standard" class="text-black">Standard Shipping - €5.00</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="shipping_method" id="express" value="express" class="mr-2">
                            <label for="express" class="text-black">Express Shipping - €10.00</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="shipping_method" id="next_day" value="next_day" class="mr-2">
                            <label for="next_day" class="text-black">Next-Day Delivery - €20.00</label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <h3 class="text-xl font-bold text-black">Total: <span id="total-price">€XX.XX</span></h3>
                    <button type="submit" class="bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out">
                        Proceed to Payment
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const shippingMethods = document.querySelectorAll('input[name="shipping_method"]');
        const totalPriceElement = document.getElementById('total-price');
        let basePrice = {{ array_sum(array_column(session('cart'), 'price')) }};

        shippingMethods.forEach(method => {
            method.addEventListener('change', () => {
                let shippingCost = 0;
                if (method.value === 'standard') shippingCost = 5.00;
                if (method.value === 'express') shippingCost = 10.00;
                if (method.value === 'next_day') shippingCost = 20.00;
                totalPriceElement.textContent = `€${(basePrice + shippingCost).toFixed(2)}`;

                shippingMethodInput.value = method.value;
                shippingCostInput.value = shippingCost.toFixed(2);
            });
        });
    </script>
</x-app-layout>
