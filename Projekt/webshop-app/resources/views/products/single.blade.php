<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-custom-bg bg-cover bg-center h-screen">
    <header>
        <x-navbar></x-navbar>
    </header>
    
    <main>
               
       
          <div class="mx-auto bg-white rounded-lg shadow-lg overflow-hidden hover:border-2 ">
                <!-- Product Image -->
                <img src="{{ $product->image }}" class="w-full h-56 object-cover" alt="{{ $product->name }}">

                <div class="p-4">
                    <!-- Product Name -->
                    <h5 class="text-xl font-bold text-gray-800">{{ $product->name }}</h5>

                    <!-- Product Description -->
                    <p class="text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>

                    <!-- Product Price -->
                    <p class="text-lg font-semibold text-gray-900 mt-2">Ár: {{ $product->price }} ft</p>
                    <p class="text-lg font-semibold text-gray-900 mt-2">Raktáron: {{ $product->stock }}</p>
                    <a href="/product/{{ $product->id}}">
                        Megtekintés
                    </a>


                </div>
            </div>
     
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>
</body>
</html>

