

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <div class="tribe-title">
        <title>Find your tribe</title>
    </div>
 </head>

<body>
    <div class="container">
        <h2>Find Your Tribe!</h2>
        <br>
      <div class="row pl-4">
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(auth()->user()->id !== $user->id): ?>

          <div class="card" style="width:250px">
              <img class="card-img-top" src="/images/avatar.png" alt="" style="width:100%">
              <div class="card-body">
                  <h4 class="card-title"><?php echo e($user->name); ?></h4>
                  <p class="mb-2">
                <small>Following: <span class="badge badge-primary"><?php echo e($user->followings()->get()->count()); ?></span></small>
                <small>Followers: <span class="badge badge-primary"><?php echo e($user->followers()->get()->count()); ?></span></small>
            </p>
            <button class="btn btn-info follow"  data-id="<?php echo e($user->id); ?>">
                <strong>
                    <?php if(auth()->user()->isFollowing($user)): ?>
                    UnFollow
                    <?php else: ?>
                    Follow
                    <?php endif; ?>
                </strong>
            </button>
        </div>
    </div>

  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/HayGirl/resources/views/users/index.blade.php ENDPATH**/ ?>