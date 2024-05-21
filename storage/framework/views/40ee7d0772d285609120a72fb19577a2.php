<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Funcionário</title>
</head>
<body>
    <h1>Criar Funcionário</h1>
    <form action="<?php echo e(route('employees.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>
        
        <label for="age">Idade:</label><br>
        <input type="text" id="age" name="age"><br>

        <label for="department_id">Departamento:</label><br>
        <select name="department_id" id="department_id">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <input type="submit" value="Criar Funcionário">
    </form>
</body>
</html>
<?php /**PATH C:\Users\sthet\Desktop\projeto\teste\resources\views/employees/create.blade.php ENDPATH**/ ?>