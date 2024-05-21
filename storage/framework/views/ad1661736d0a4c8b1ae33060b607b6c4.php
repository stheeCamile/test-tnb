<!DOCTYPE html>
<html>
<head>
    <title>Criar novo Departamento</title>
    <style>
        table {
            width: 40%;
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
    <h1>Create Department</h1>
    <?php if(session('message')): ?>
        <p><?php echo e(session('message')); ?></p>
    <?php endif; ?>
    <form action="<?php echo e(route('departments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Nome do departamento:</label>
        <input type="text" name="Nome" id="name" required>
        <button type="submit">Criar</button>
    </form>

    <h2>Departamentos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($department->id); ?></td>
                    <td><?php echo e($department->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\sthet\Desktop\projeto\teste\resources\views/departments/create.blade.php ENDPATH**/ ?>