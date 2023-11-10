<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuarios </title>
</head>
<body>
    <li>
        <ul>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($user->name); ?> | 
                    <?php echo e($user->email); ?> |
                    <?php echo e($user->password); ?> | <a href=" <?php echo e(route('users.edit', ['user'=>$user->id])); ?> ">&#9989;</a> | <a href="<?php echo e(route('users.show',['user'=>$user->id])); ?>">&#128465;</a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
</body>
</html><?php /**PATH C:\Users\IsacA\Documents\laravel\listar-usuarios\resources\views/listagem.blade.php ENDPATH**/ ?>