

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center"
        <div class="col-sm-6">

            <div class="card">
                <div class="card-body">


                    <form action="/posts/<?php echo e($post->id); ?>" method="POST">
                        <?php echo e(method_field('PUT')); ?>

                        <?php echo csrf_field(); ?>
                        <textarea name="body" value="body"><?php echo e($post->body); ?></textarea><br />
                        <button type="submit">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/HayGirl/resources/views/posts/edit.blade.php ENDPATH**/ ?>