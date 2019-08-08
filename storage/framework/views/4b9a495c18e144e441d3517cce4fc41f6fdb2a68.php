<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="/lessons/create">Добавить занятие</a>
        <div class="row">
            <?php if(!count($lessons)): ?>
                Занятий нет
            <?php else: ?>
                <form>
                    <?php echo csrf_field(); ?>
                    <button type="submit" formaction="/lessons/delete" formmethod="post">Удалить</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Номер</th>
                            <th>Тема</th>
                            <th>Дата</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" value="<?php echo e($lesson->id); ?>" name="lesson[]"></td>
                                <td><?php echo e($lesson->number); ?></td>
                                <td><?php echo e($lesson->subject); ?></td>
                                <td><?php echo e($lesson->date); ?></td>
                                <td>
                                    <a href="/lessons/<?php echo e($lesson->id); ?>/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/lessons/<?php echo e($lesson->id); ?>/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php endif; ?>
                </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views/lessons/index.blade.php ENDPATH**/ ?>