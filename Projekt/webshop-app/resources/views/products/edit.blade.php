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
    <form method="POST" action="{{route('product.update', ['product' => $product])}}"  enctype="multipart/form-data">
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
        <div x-data="{ open: false, selected: '{{$product->category_id}}', selectedValue: '{{$product->category_id}}' }" class="relative pt-2">
            <label class="text-white" for="category_id">Product Type</label>
            <div @click="open = !open" class="appearance-none block mt-1 w-full rounded-md border-2 cursor-pointer focus:border-slate-600 focus:ring-slate-600 px-4 py-1  bg-white">
                <div class="flex items-center justify-between">
                    <span x-text="selected"></span>
                    <i :class="open ? 'fa-square-caret-up' : 'fa-square-caret-down'" class="fa-regular fa-square-caret-down float-right text-2xl text-slate-500"></i>
                </div>
            </div>
            <div x-show="open" @click.away="open = false" class="absolute mt-1 w-full rounded-md shadow-lg bg-white overflow-y-auto">
                <div class="max-h-40 overflow-y-auto">
                    @foreach($category_id as $id)
                    <div @click="selected = '{{ $id->name }}'; selectedValue = '{{ $id->value }}'; open = false"
                         class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">
                        {{ $id->name }}
                    </div>
                    @endforeach
                </div>
            </div>
            <input type="hidden" name="category_id" :value="selectedValue">
        </div>
        <div class="pt-2">
            <label class="text-white" for="image">Image</label>
            <div class="bg-white h-10 mt-1 w-full rounded-md">
                <div class="flex items-center">
                    <label for="file-upload" class="block w-full text-center sm:w-auto rounded-md h-full bg-slate-500 text-white px-4 py-2 cursor-pointer hover:bg-slate-600">Upload file</label>
                    <input id="file-upload" type="file" name="image" id="image" placeholder="Image description" class="hidden" />
                    <span id="file-name" class="hidden sm:inline-block ml-4 text-black max-w-xs truncate overflow-hidden">No file chosen</span>
                </div>
            </div>
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
