<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </p>
        <p>
            <label>Description:</label><br>
            <textarea name="description">{{ $product->description }}</textarea>
        </p>
        <p>
            <label>Price (₱):</label><br>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        </p>
        <button type="submit">Update</button>
    </form>

    <p><a href="{{ route('products.index') }}">Back to List</a></p>
</body>
</html>
