



<?php $__env->startSection('content'); ?>
  <h1>Data Mahasiswa</h1>
  <table>
    <thead>
      <td>NIM</td>
      <td>nama</td>
      <td>prodi</td>
    </thead>

    <tbody>
      <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($m['nim']); ?></td>
          <td><?php echo e($m['nama']); ?></td>
          <td><?php echo e($m['prodi']); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   


  </table>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevin Hadinata\Desktop\WebProg\week8\resources\views/students/student.blade.php ENDPATH**/ ?>