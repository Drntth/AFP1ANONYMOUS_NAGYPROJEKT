<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-custom-bg bg-cover">
    <h1>Add a product</h1>
    <div>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        @method('POST')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" placeholder="Description"></textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price">
        </div>
        <div>
            <label for="category_id">Category ID</label>
            <input type="text" name="category_id" id="category_id" placeholder="Category ID">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" placeholder="Image description">
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="text" name="stock" id="stock" placeholder="Stock">
        </div>
        <div>
            <button type="submit">Add product</button>
        </div>



    </form>
</body>
</html>
