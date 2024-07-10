<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>List of Product</h1>
    <div>
        <?php if(session()->has('success')): ?>
        <div>
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div><a href="<?php echo e(route('product.create')); ?>">Create Record</a></div>
    <div>
        <table border="1">
            <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Product Quantity</th>
              <th>Product Description</th>
              <th>Product Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->quantity); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td>
                    <a href="<?php echo e(route('product.edit',['product'=> $product])); ?>">Edit</a>
                </td>
                <td>
                    <form method="POST" action="<?php echo e(route('product.delete',['product'=>$product])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\chirper\resources\views/products/index.blade.php ENDPATH**/ ?>