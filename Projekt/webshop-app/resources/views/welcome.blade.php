<<<<<<< Updated upstream
<x-app-layout>
</x-app-layout>
=======
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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</main>
    <footer>
        <x-footer></x-footer>
    </footer>
</body>

</html>
>>>>>>> Stashed changes
