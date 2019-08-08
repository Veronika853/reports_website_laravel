<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="/reports/create">Добавить отчёт</a>
        <div class="row">
            <?php if(!count($reports)): ?>
                Отчётов нет
            <?php else: ?>
                <form>
                    <?php echo csrf_field(); ?>
                    <button type="submit" formaction="/reports/delete" formmethod="post">Удалить</button>
                    <button type="submit" formaction="/reports/export" formmethod="post">CSV</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Ученик</th>
                            <th>Урок</th>
                            <th>Тема</th>
                            <th>Усвоение</th>
                            <th>Активность</th>
                            <th>Настроение</th>
                            <th>Присутствие</th>
                            <th>ДЗ</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" value="<?php echo e($report->id ?? ""); ?>" name="report[]"></td>
                                <td><?php echo e($report->student->name ?? ""); ?> <?php echo e($report->student->fname ?? ""); ?></td>
                                <td><?php echo e($report->lesson->number ?? ""); ?></td>
                                <td><?php echo e($report->lesson->subject ?? ""); ?></td>
                                <td><?php echo e($report->progress ?? ""); ?></td>
                                <td><?php echo e($report->participation->name ?? ""); ?></td>
                                <td><?php echo e($report->mood->name ?? ""); ?></td>
                                <td>
                                    <?php if(!$report->attendance): ?>
                                        Нет
                                    <?php else: ?>
                                        Да
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($report->hw_result ?? ""); ?></td>
                                <td>
                                    <a href="/reports/<?php echo e($report->id); ?>/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/reports/<?php echo e($report->id); ?>/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php endif; ?>
                    <form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views/reports/index.blade.php ENDPATH**/ ?>