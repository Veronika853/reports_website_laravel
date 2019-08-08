<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/reports/<?php echo e($report->id); ?>" method="post">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>

            <div>
                <label for="studentId" class="col-md-4 col-form-label">Ученик</label>
                <select name="student_id" id="studentId">
                    <option value="">Выберите ученика</option>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($student->id); ?>" <?php if($student->id == $report->student->id): ?> selected="selected" <?php endif; ?>><?php echo e($student->name); ?> <?php echo e($student->fname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if ($errors->has('studentId')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('studentId'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div>
                <label for="lessonId" class="col-md-4 col-form-label">Урок</label>
                <select name="lesson_id" id="lessonId">
                    <option value="">Выберите ученика</option>
                    <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($lesson->id); ?>" <?php if($lesson->id == $report->lesson->id): ?> selected="selected" <?php endif; ?>><?php echo e($lesson->subject); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if ($errors->has('lessonId')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lessonId'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <label for="progress" class="col-md-4 col-form-label">Усвоение материала</label>
            <textarea id="progress"
                      name="progress"
                      class="form-control <?php if ($errors->has('progress')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('progress'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                      name="progress"
                      autocomplete="name" autofocus><?php echo e($report->progress); ?>

                </textarea>
            <?php if ($errors->has('progress')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('progress'); ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div>
                <label for="participationId" class="col-md-4 col-form-label">Активность</label>
                <select name="participation_id" id="participationId">
                    <option value="">Выберите активность</option>
                    <?php $__currentLoopData = $participations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($participation->id); ?>" <?php if($participation == $report->participation): ?> selected="selected" <?php endif; ?>><?php echo e($participation->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if ($errors->has('participationId')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('participationId'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div>
                <label for="moodId" class="col-md-4 col-form-label">Настроение</label>
                <select name="mood_id" id="moodId">
                    <option value="">Выберите настроение</option>
                    <?php $__currentLoopData = $moods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($mood->id); ?>" <?php if($mood == $report->mood): ?> selected="selected" <?php endif; ?>><?php echo e($mood->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if ($errors->has('moodId')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('moodId'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div>
                <label for="attendance" class="col-md-4 col-form-label">Присутствие</label>
                <select name="attendance" id="attendance">
                    <option value="">Выберите присутствие</option>
                    <option value="0" <?php if(!$report->attendance): ?> selected="selected"<?php endif; ?>><?php echo e("Нет"); ?></option>
                    <option value="1" <?php if($report->attendance): ?> selected="selected"<?php endif; ?>><?php echo e("Да"); ?></option>
                </select>

                <?php if ($errors->has('attendance')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('attendance'); ?>
                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <label for="hw_result" class="col-md-4 col-form-label">Выполнение ДЗ</label>
            <input id="hwResult"
                   type="number"
                   step="0.01"
                   name="hw_result"
                   class="form-control <?php if ($errors->has('hw_result')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('hw_result'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="hw_result"
                   value="<?php echo e(old('hw_result') ?? $report->hw_result); ?>"
                   autocomplete="name" autofocus>

            <?php if ($errors->has('hw_result')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('hw_result'); ?>
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
            <a href="/students/<?php echo e($report->id); ?>/delete"><button class="btn btn-primary">Удалить</button></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\reports_website\resources\views//reports/edit.blade.php ENDPATH**/ ?>