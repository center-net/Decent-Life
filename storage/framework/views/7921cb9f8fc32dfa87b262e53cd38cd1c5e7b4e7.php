<?php $__env->startSection('content'); ?>
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url(<?php echo e(asset('site/assets/images/share.png')); ?>);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title"><?php echo e($title); ?></h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Inner Banner html end-->
    <div class="archive-section blog-archive">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 primary right-sidebar">
                <!-- blog post item html start -->
                <div class="grid blog-inner row">

                    <?php $__currentLoopData = $initiatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$initiative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="grid-item col-md-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="blog-single.html">
                                        <img src="<?php echo e(asset('Upload/'.$initiative->image)); ?>" alt="">
                                </a>
                            </figure>
                            <div class="entry-content">
                                <h3>
                                <a href="blog-single.html"><?php echo e($initiative->title); ?></a>
                                </h3>
                                <p>
                                    <span>
                                        <?php echo e($initiative->description); ?>

                                    </span>
                                </p>

                                <div class="entry-meta">

                                </div>
                            </div>
                        </article>
                    </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
             </div>

          </div>
       </div>
    </div>
 </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\moh\resources\views/site/blog.blade.php ENDPATH**/ ?>