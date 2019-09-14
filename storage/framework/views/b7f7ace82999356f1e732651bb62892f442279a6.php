

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">What is on your mind?</h4>
                        <p class="card-text">
                            <form action="/posts" method="POST">
                                <?php echo csrf_field(); ?>
                                <textarea name='body' placeholder="Enter your text here" required></textarea>
                                <button type="submit" class="btn btn-primary mb-2">Post</button>
                            </form></p>
                        </div>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/HayGirl/resources/views/posts/create.blade.php ENDPATH**/ ?>