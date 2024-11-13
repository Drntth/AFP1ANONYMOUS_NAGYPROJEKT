<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-custom-bg bg-auto">
    <div x-data="{ open: @if($errors->any()) true @else false @endif }" x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-custom-bg p-6 rounded-lg shadow-lg w-11/12 max-w-md text-center">
            <h2 class="text-white font-bold text-xl mb-4">Errors</h2>
            <div id="error-messages" class="text-white font-bold text-left ml-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button @click="open = false" class="text-white px-3 py-1 mt-5 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Close</button>
        </div>
    </div>
    <div class="max-w-xl mx-auto space-y-6 place-content-center h-screen">
    <div class="mx-5">
    <div class="p-4 shadow-2xl shadow-black rounded-lg backdrop-blur-3xl border-slate-500 border-4">
        <h1 class="text-white text-lg text-center pb-5">Edit a product</h1>
    <form method="POST" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('PUT')
        <div>
            <label class="text-white" for="name">Name</label>
            <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}">
        </div>
         <div class="pt-2">
            <label class="text-white" for="description">Description</label>
            <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <div class="pt-2">
            <label class="text-white" for="price">Price</label>
            <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div class="pt-2">
        <label class="text-white" for="category_id">Product Type</label>
        <select class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" name="category_id" id="category_id" required>
            @foreach($category_id as $id)
                <option value="{{ $id->value }}">{{ $id->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="pt-2">
            <label class="text-white" for="image">Image</label>
            <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="image" id="image" placeholder="Image description" value="{{$product->image}}">
        </div>
        <div class="pt-2">
            <label class="text-white" for="stock">Stock</label>
            <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="stock" id="stock" placeholder="Stock" value="{{$product->stock}}">
        </div>
        <div class="pt-5 flex justify-between flex-col space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
            <a href="{{route('product.index')}}" class="text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Back</a>
            <button class="text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600" type="submit">Update product</button>
        </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>
