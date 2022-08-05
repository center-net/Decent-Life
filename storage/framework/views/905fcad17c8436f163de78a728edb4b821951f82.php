<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <div class="pull-center"> <img src="<?php echo e(asset('Upload/'.$setting->logo)); ?>" class="img-thumbnail"  alt="" style="height: 150px"></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"><?php echo e(trans('main_trans.Dashboard')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.users')); ?>">
                            <div class="pull-left"><i class="ti-user"></i><span class="right-nav-text"><?php echo e(trans('users_tran.Admin')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.initiatives')); ?>">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text"><?php echo e(trans('initiatives_tran.initiatives')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.serves')); ?>">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text"><?php echo e(trans('serves_tran.serves')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.targets')); ?>">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text"><?php echo e(trans('targets_tran.targets')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.setting.show')); ?>">
                            <div class="pull-left"><i class="ti-notepad"></i><span class="right-nav-text"><?php echo e(trans('setting_tran.setting')); ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu item Dashboard-->

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
<?php /**PATH E:\laravel\moh\resources\views/layouts/main-sidebar.blade.php ENDPATH**/ ?>