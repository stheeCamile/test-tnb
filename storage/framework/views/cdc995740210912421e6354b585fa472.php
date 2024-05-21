<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Schedules</title>
</head>
<body>
    <h1>Work Schedules</h1>
    <?php if(session('message')): ?>
        <p><?php echo e(session('message')); ?></p>
    <?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($schedule->employee->name); ?></td>
                    <td><?php echo e($schedule->date); ?></td>
                    <td><?php echo e($schedule->start_time); ?></td>
                    <td><?php echo e($schedule->end_time); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo e(route('work-schedules.create')); ?>">
        <button type="button">Create Work Schedule</button>
    </a>
</body>
</html>
<?php /**PATH C:\Users\sthet\Desktop\projeto\teste\resources\views/work_schedules/index.blade.php ENDPATH**/ ?>