<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Funcionários</h1>
    <?php if(session('message')): ?>
        <p><?php echo e(session('message')); ?></p>
    <?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Idade</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($employee->name); ?></td>
                    <td><?php echo e($employee->email); ?></td>
                    <td><?php echo e($employee->cpf); ?></td>
                    <td><?php echo e($employee->age); ?></td>
                    <td><?php echo e($employee->department->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo e(route('employees.create')); ?>">
        <button type="button">Criar Novo Funcionário</button>
    </a>
</body>
</html>
<?php /**PATH C:\Users\sthet\Desktop\projeto\teste\resources\views/employees/show.blade.php ENDPATH**/ ?>