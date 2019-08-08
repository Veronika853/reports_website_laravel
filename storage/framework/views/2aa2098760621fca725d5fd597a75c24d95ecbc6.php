<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="/students/create">Добавить ученика</a>
        <div class="row">
            <?php if(!count($students)): ?>
                Учеников нет
            <?php else: ?>
                <form>
                    <?php echo csrf_field(); ?>
                    <button type="submit" formaction="/students/delete" formmethod="post">Удалить</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Группа</th>
                            <th>Университет</th>
                            <th>Ожидаемый результат</th>
                            <th>Другое</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" value="<?php echo e($student->id); ?>" name="student[]"></td>
                                <td><?php echo e($student->name); ?></td>
                                <td><?php echo e($student->fname); ?></td>
                                <td><?php echo e($student->group->name ?? ""); ?></td>
                                <td><?php echo e($student->uni->name ?? ""); ?></td>
                                <td><?php echo e($student->exp_res ?? ""); ?></td>
                                <td><?php echo e($student->misc ?? ""); ?></td>
                                <td>
                                    <a href="/students/<?php echo e($student->id); ?>/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/students/<?php echo e($student->id); ?>/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php endif; ?>
                </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views/students/index.blade.php ENDPATH**/ ?>