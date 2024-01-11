<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <form action="/upload" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="file">Choose file to upload:</label>
        <input type="file" id="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>

</html><?php /**PATH C:\Users\maste\Documents\VS code file\VS code file\Year3\Cloud Clone Project\Cloud-Empty\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>