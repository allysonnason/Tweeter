

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <div class= "card">
                        <div class="card-body">
                            <form action="/profiles/<?php echo e($profile->id); ?>" method="POST">
                                <?php echo e(method_field('PUT')); ?>

                                <?php echo csrf_field(); ?>
                                <textarea name="location" value="location"><?php echo e($profile->location); ?></textarea><br />
                                <textarea name="interests" value="interests"><?php echo e($profile->interests); ?></textarea><br />
                                <textarea name="horsename" value="horsename"><?php echo e($profile->horsename); ?></textarea><br />
                                <textarea name="breed" value="breed"><?php echo e($profile->breed); ?></textarea><br />
                                <textarea name="age" value="age"><?php echo e($profile->age); ?></textarea><br />
                                <button type="submit">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/HayGirl/resources/views/profiles/edit.blade.php ENDPATH**/ ?>