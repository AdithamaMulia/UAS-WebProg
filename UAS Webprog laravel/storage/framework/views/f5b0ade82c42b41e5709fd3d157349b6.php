<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1></h1>



<?php $__env->startSection('content'); ?>
  hi <?php echo e($nama); ?>

  nim kamu adalah <?php echo e($nim); ?>

  kamu adalah <?php echo e($trait); ?>

  kamu ngeselin
  <?php $__currentLoopData = $namaMhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($mhs); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


</body>
</html>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevin Hadinata\Desktop\WebProg\week8\resources\views/about.blade.php ENDPATH**/ ?>