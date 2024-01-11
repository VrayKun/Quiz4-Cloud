

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page content here -->
<div class="container w-50">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <form method="POST" action="/submit" enctype="multipart/form-data">
        <h3 class="mt-3 mb-3">Registration Form</h3>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your first name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your last name">
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label>Storage Type</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="storageType" id="spaceStorage" value="space">
                <label class="form-check-label" for="spaceStorage">
                    Space Storage
                </label>
            </div>
            <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="storageType" id="blockStorage" value="block">
                <label class="form-check-label" for="blockStorage">
                    Block Storage
                </label>
            </div> -->
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    <button onclick="window.location.href=window.location.origin + '/files'" class="btn btn-secondary mt-3">
        <i class="fas fa-folder"></i> See All Files
    </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maste\Documents\VS code file\VS code file\Year3\Cloud Clone Project\Cloud-Empty\example-app\example-app\resources\views/home.blade.php ENDPATH**/ ?>