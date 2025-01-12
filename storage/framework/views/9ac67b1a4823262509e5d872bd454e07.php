<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Edit a Product</h1>

    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>


    <form method="POST" action="<?php echo e(route('product.update',['product'=>$product])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div>
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Enter Product Name" value="<?php echo e($product->name); ?>"/>
        </div>
        <div>
            <label>Product Quantity</label>
            <input type="text" name="quantity" placeholder="Enter Product Quantity" value="<?php echo e($product->quantity); ?>"/>
        </div>
        <div>
            <label>Product Description</label>
            <input type="text" name="description" placeholder="Enter Product Description" value="<?php echo e($product->description); ?>"/>
        </div>
        <div>
            <label>Product Price</label>
            <input type="text" name="price" placeholder="Enter Product Price" value="<?php echo e($product->price); ?>"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\chirper\resources\views/products/edit.blade.php ENDPATH**/ ?>