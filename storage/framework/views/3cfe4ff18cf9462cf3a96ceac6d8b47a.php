<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="POST" action="<?php echo e(route('products.update', $product->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo e($product->name); ?>" required>
        </p>
        <p>
            <label>Description:</label><br>
            <textarea name="description"><?php echo e($product->description); ?></textarea>
        </p>
        <p>
            <label>Price (₱):</label><br>
            <input type="number" step="0.01" name="price" value="<?php echo e($product->price); ?>" required>
        </p>
        <button type="submit">Update</button>
    </form>

    <p><a href="<?php echo e(route('products.index')); ?>">Back to List</a></p>
</body>
</html>
<?php /**PATH C:\Users\magpa\laravel-crud-app\resources\views/products/edit.blade.php ENDPATH**/ ?>