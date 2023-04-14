<!DOCTYPE html>
<html>
<head>
    <title>Star Wars</title>
</head>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<body>
<div>
    <h4>Star Wars Search</h4>
    <form>
        <input type="text" class="form-control" placeholder="Find star wars character" name="search" />
    </form>
    <table border = "1" class="movieStars">
        <?php if(isset($starWarsData)): ?>
            <?php $__currentLoopData = $starWarsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starWars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($starWars['name']); ?></td>
                    <td><?php echo e($starWars['height']); ?></td>
                    <td><?php echo e($starWars['mass']); ?></td>
                    <td><?php echo e($starWars['hair_color']); ?></td>
                    <td><?php echo e($starWars['skin_color']); ?></td>
                    <td><?php echo e($starWars['eye_color']); ?></td>
                    <td><?php echo e($starWars['birth_year']); ?></td>
                    <td><?php echo e($starWars['gender']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
</body>
</html>
<?php /**PATH /Users/jhalak.mehta/dev-git/TEST_INT/Laravel/example-app/resources/views/starwars.blade.php ENDPATH**/ ?>