<!-- header html start -->

<header id="masthead" class="site-header site-header-transparent">
    <div class="top-header">
        <div class="">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 d-lg-block">

                    <div class="header-contact-info">

                      <h4 style="color: white;margin-right:88px" ><?php echo e($setting->title); ?></h4 >
                    </div>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-3  ">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <a href="https://wa.me/+972<?php echo e($setting->phone); ?>" target="_blank"> <i class="fas fa-phone-alt"></i>
                                    <?php echo e($setting->phone); ?> </a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo e($setting->email); ?>" target="_blank">
                                    <i class="fas fa-envelope"></i>
                                    <?php echo e($setting->email); ?>


                                </a>
                            </li>

                        </ul>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="main-navigation">
                <nav id="navigation" class="navigation  d-lg-inline-block">
                    <ul class="nav">
                        <li style="font-size: 25px !import" class="current-menu-item">
                            <a href="<?php echo e(route('index')); ?>"><?php echo e(trans('main_trans.Home')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('blog')); ?>"><?php echo e(trans('initiatives_tran.initiatives')); ?></a>

                        </li>

                        <li>
                            <a href="<?php echo e(route('index')); ?>#age"><?php echo e(trans('serves_tran.serves')); ?></a>

                        </li>

                        <li>
                            <a href="<?php echo e(route('index')); ?>#goal"><?php echo e(trans('targets_tran.targets')); ?></a>

                        </li>
                        <li>
                            <a href="<?php echo e(route('index')); ?>#team"><?php echo e(trans('site_trans.About')); ?></a>

                        </li>
                        <li>
                            <a href="<?php echo e(route('index')); ?>#connect"><?php echo e(trans('site_trans.Communication_us')); ?></a>

                        </li>
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </nav>

            </div>

            <div class="site-identity">
                <h1 class="site-title">
                    <a href="<?php echo e(route('donte')); ?>">
                        <a href="<?php echo e(route('donte')); ?>" class="button-round"><?php echo e(trans('general_tran.Donate_Now')); ?></a>
                    </a>
                </h1>
            </div>

        </div>
    </div>
    <div class="mobile-menu-container">

    </div>

</header>
<?php /**PATH E:\laravel\moh\resources\views/site/include/header.blade.php ENDPATH**/ ?>