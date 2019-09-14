

<?php $__env->startSection('content'); ?>

            <div class="card">
                <h5 class="card-header"><?php echo e($user->name); ?></h5>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo e($profile->interests); ?> <br />
                        <?php echo e($profile->location); ?> <br />
                        <?php echo e($profile->horsename); ?> <br />
                        <?php echo e($profile->breed); ?> <br />

                        <?php if(Auth::id()== $user->profile->user_id): ?>
                        <a href ="/profiles/<?php echo e($user->id); ?>/edit" class="btn btn-secondary">Edit Profile</a><br />
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">
                        <div class="card-body ">
                            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('posts._post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/HayGirl/resources/views/profiles/show.blade.php ENDPATH**/ ?>