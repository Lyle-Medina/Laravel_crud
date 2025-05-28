<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>Description:</label><br>
            <textarea name="description"></textarea>
        </p>
        <p>
            <label>Price (₱):</label><br>
            <input type="number" step="0.01" name="price" required>
        </p>
        <button type="submit">Save</button>
    </form>

    <p><a href="{{ route('products.index') }}">Back to List</a></p>
</body>
</html>
