<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/lessons/<?php echo e($lesson->id); ?>" method="post">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>

            <label for="number" class="col-md-4 col-form-label">Номер</label>
            <input id="number"
                   type="number"
                   name="number"
                   class="form-control <?php if ($errors->has('number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="number"
                   value="<?php echo e(old('number') ?? $lesson->number); ?>"
                   autocomplete="name" autofocus>

            <?php if ($errors->has('number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('number'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <label for="subject" class="col-md-4 col-form-label">Тема</label>
            <input id="subject"
                   type="text"
                   name="subject"
                   class="form-control <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="subject"
                   value="<?php echo e(old('subject') ?? $lesson->subject); ?>"
                   autocomplete="name" autofocus>

            <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <label for="date" class="col-md-4 col-form-label">Дата</label>
            <input type="date" name="date" id="date" value="<?php echo e(old('date') ?? $lesson->date); ?>">
            <?php if ($errors->has('date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('date'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>



            <div class="pt-4">
                <button class="btn btn-primary">Изменить ученика</button>
            </div>


        </form>
        <div class="pt-4">
            <a href="/lessons/<?php echo e($lesson->id); ?>/delete"><button class="btn btn-primary">Удалить</button></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views//lessons/edit.blade.php ENDPATH**/ ?>