

<?php $__env->startSection('title', 'File'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Each row represents a file -->
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->first_name); ?></td>
                <td><?php echo e($user->last_name); ?></td>
                <td><?php echo e($user->image_url); ?>

                </td>
                <td>
                    <?php if($user->storage_type === 'space'): ?>
                    Space Object Storage
                    <?php elseif($user->storage_type === 'block'): ?>
                    Block Storage
                    <?php else: ?>
                    <?php echo e($user->storage_type); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <a href="https://phal.sgp1.cdn.digitaloceanspaces.com/<?php echo e($user->image_url); ?>" target="_blank"><i class="fas fa-eye mx-2"></i></a> <!-- View icon -->
                    <a href="<?php echo e(route('file.delete', $user)); ?>" class="text-danger"><i class="fas fa-trash mx-2"></i></a> <!-- Delete icon -->
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- Repeat for each file -->
        </tbody>
    </table>
    <button onclick="window.location.href=window.location.origin + '/'" class="btn btn-secondary mt-3">
        <i class="fa fa-home mx-1"></i> Home
    </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maste\Documents\VS code file\VS code file\Year3\Cloud Clone Project\Cloud-Empty\example-app\resources\views/file.blade.php ENDPATH**/ ?>