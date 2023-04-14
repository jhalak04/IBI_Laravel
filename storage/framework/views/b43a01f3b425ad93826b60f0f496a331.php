<!DOCTYPE html>
<html>
<head>
    <title>Movie Characters</title>
</head>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<script src="<?php echo e(asset('js/search.js')); ?>" defer></script>
<body>
<div class="container">
    <input type="text" id="search" class="form-control" placeholder="Find character here" name="search" onkeydown="searchActors()" />
    <table border = "1" class="movieStars">
        <tr class="headers">
            <td>Actor's Name</td>
            <td>Movie Name</td>
        </tr>
        <?php if(isset($actors)): ?>
            <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($actor->name); ?></td>
                    <td><?php echo e($actor->movie_name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
</body>
</html>
<?php /**PATH /Users/jhalak.mehta/dev-git/TEST_INT/Laravel/example-app/resources/views/welcome.blade.php ENDPATH**/ ?>