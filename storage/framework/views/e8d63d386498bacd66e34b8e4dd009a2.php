<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Submission</title>
</head>
<body>
    <div class="container">
        <h1>Submission Successful</h1>
    </div>
    <div class="form-container">
        <ul>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (! ($key === '_token')): ?>
                    <?php if($key === 'art'): ?>
                        <li><?php echo e($key); ?>: <img src="<?php echo e(asset('storage/' . $value)); ?>" alt="Art Picture">
                        </li>
                    <?php else: ?>
                        <li><?php echo e($key); ?>: <?php echo e($value); ?></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</body>
</html>
<?php /**PATH /Users/caca/Documents/uni/sem 5/PBKK/formassignment/resources/views/submission.blade.php ENDPATH**/ ?>