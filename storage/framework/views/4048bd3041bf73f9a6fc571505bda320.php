<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Work Schedule</title>
</head>
<body>
    <h1>Create Work Schedule</h1>
    <form action="<?php echo e(route('work-schedules.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="employee_id">Employee:</label>
        <select name="employee_id" id="employee_id" required>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($employee->id); ?>"><?php echo e($employee->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button type="submit">Create</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\sthet\Desktop\projeto\teste\resources\views/work_schedules/create.blade.php ENDPATH**/ ?>