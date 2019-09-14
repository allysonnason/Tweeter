

    <div class="card">
        <h5 class="card-header"><a href ="/profiles/<?php echo e($post->user->id); ?>"><?php echo e($post->user->name); ?></a></h5>
            <div class="card-body">
                <div class="card-title"><?php echo e($post->body); ?></div>
                    <br>

            

                <div class="card-text post-buttons">
                    <like-button :post-id="<?php echo e($post->id); ?>" is-liked="<?php echo e($post->likedByUser); ?>" :count="<?php echo e($post->likes()->count()); ?>"></like-button>

                </div>
                <?php if(Auth::id() == $post->user_id): ?>
                <form action="/posts/<?php echo e($post->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-dark">Edit</a>
                </form>
                <?php endif; ?>
                <?php if(Auth::check()): ?>

                <div class="card-text post-buttons">


                <form action="<?php echo e(route('comments.store', $post->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <p><?php echo e(Form::textarea('body', old('body'))); ?></p>
                <?php echo e(Form::hidden('post_id', $post->id)); ?>

                <p><?php echo e(Form::submit('Comment')); ?></p>
                </form>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <a class= "btn btn-primary" href="#addGif" data-toggle="collapse">GIF</a>
                        <div id="addGif" class="collapse">
                            <gif-component></gif-component>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

    <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($comment->user->name); ?></h5>
                <p class="card-text">
                    <?php echo e($comment->body); ?> <br>
                    <img src="<?php echo e($comment->gif); ?>" alt="">
                </p>
            </div><br>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/vagrant/code/HayGirl/resources/views/posts/_post.blade.php ENDPATH**/ ?>