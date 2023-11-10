<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>User_edit</h2>
<a href="/users">Users</a>

<?php if(session()->has('message')): ?>
<?php echo e(session()->get('message')); ?>

<?php endif; ?>

<!-- adicionar esse metodo ao form: action="<?php echo e(route('users.update', $user->id)); ?>"  -->

<form method="POST">
    <!-- <?php echo csrf_field(); ?> é necessario para que não de um erro na pagina. É mostrado o seguinte erro: 419 | Page Expired -->
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value=" <?php echo e($user->name); ?> ">
    <input type="text" name="email" value=" <?php echo e($user->email); ?> ">
    <button type="submit">Enviar</button>
</form>
</body>
</html>

<?php /**PATH C:\Users\IsacA\Documents\laravel\listar-usuarios\resources\views/user_edit.blade.php ENDPATH**/ ?>