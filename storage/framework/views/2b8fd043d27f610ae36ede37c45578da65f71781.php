<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/students" method="post">
            <?php echo csrf_field(); ?>

            <label for="name" class="col-md-4 col-form-label">Имя</label>
            <input id="name"
                   type="text"
                   name="name"
                   class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="name"
                   value="<?php echo e(old('name')); ?>"
                   autocomplete="name" autofocus>

            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <label for="fname" class="col-md-4 col-form-label">Фамилия</label>
            <input id="fname"
                   type="text"
                   name="fname"
                   class="form-control <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="fname"
                   value="<?php echo e(old('fname')); ?>"
                   autocomplete="name" autofocus>

            <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <div>
                <label for="group_id" class="col-md-4 col-form-label">Группа</label>
                <select name="group_id">
                    <option value="">Выберите группу</option>
                    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if ($errors->has('group_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('group_id'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>


            <label for="uni_id" class="col-md-4 col-form-label">Желаемый университет</label>
            <select name="uni_id">
                <option value="">Выберите университет</option>
                <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($university->id); ?>"><?php echo e($university->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if ($errors->has('uni_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('uni_id'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <div>
                <label for="exp_res" class="col-md-4 col-form-label">Ожидаемый результат</label>
                <input id="exp_res"
                       type="text"
                       name="exp_res"
                       class="form-control <?php if ($errors->has('exp_res')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('exp_res'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                       name="exp_res"
                       value="<?php echo e(old('exp_res')); ?>"
                       autocomplete="name" autofocus>
                <?php if ($errors->has('exp_res')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('exp_res'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>


            <label for="misc" class="col-md-4 col-form-label">Другое</label>
            <textarea id="misc"
                      name="misc"
                      class="form-control <?php if ($errors->has('misc')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('misc'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                      name="misc"
                      autocomplete="name" autofocus>
                </textarea>
            <?php if ($errors->has('misc')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('misc'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <div class="pt-4">
                <button class="btn btn-primary">Добавить ученика</button>
            </div>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views/students/create.blade.php ENDPATH**/ ?>