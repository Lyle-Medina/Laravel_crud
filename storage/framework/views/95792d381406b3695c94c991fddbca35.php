<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>

    <form method="POST" action="<?php echo e(route('products.store')); ?>">
        <?php echo csrf_field(); ?>
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

    <p><a href="<?php echo e(route('products.index')); ?>">Back to List</a></p>
</body>
</html>
<?php /**PATH C:\Users\magpa\laravel-crud-app\resources\views/products/create.blade.php ENDPATH**/ ?>