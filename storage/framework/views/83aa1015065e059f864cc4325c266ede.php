<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Create a Product</h1>

    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>

    <form method="POST" action="<?php echo e(route('product.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Enter Product Name"/>
        </div>
        <div>
            <label>Product Quantity</label>
            <input type="text" name="quantity" placeholder="Enter Product Quantity"/>
        </div>
        <div>
            <label>Product Description</label>
            <input type="text" name="description" placeholder="Enter Product Description"/>
        </div>
        <div>
            <label>Product Price</label>
            <input type="text" name="price" placeholder="Enter Product Price"/>
        </div>
        <div>
            <input type="submit" value="Save a New Product"/>
        </div>
    </form>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\chirper\resources\views/products/create.blade.php ENDPATH**/ ?>