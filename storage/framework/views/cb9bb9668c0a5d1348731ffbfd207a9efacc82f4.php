<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"><?php echo e(trans('setting_tran.Admin')); ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><?php echo e(trans('setting_tran.Admin')); ?></li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <button type="button" class="button x-small" data-toggle="modal" data-target="#edit<?php echo e($setting->id); ?>">
                    <?php echo e(trans('general_tran.Edit')); ?> <?php echo e(trans('setting_tran.setting')); ?>

                </button>
                <br><br>

                <div class="row">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.Title_'.$localeCode)); ?></label>
                            <h5 class="card-title"><?php echo e($setting->getTranslation('title', $localeCode)); ?></h5>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.address_'.$localeCode)); ?></label>
                            <h5 class="card-title"><?php echo e($setting->getTranslation('address', $localeCode)); ?></h5>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.logo')); ?></label>
                        <img src="<?php echo e(asset('Upload/'.$setting->logo)); ?>" alt="" style="height: 80px">
                    </div>
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.favicon')); ?></label>
                        <img src="<?php echo e(asset('Upload/'.$setting->favicon)); ?>" alt="" style="height: 80px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.facebook')); ?></label>
                        <h5 class="card-title"><?php echo e($setting->facebook); ?></h5>
                    </div>
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.instagram')); ?></label>
                        <h5 class="card-title"><?php echo e($setting->instagram); ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.phone')); ?></label>
                        <h5 class="card-title"><?php echo e($setting->phone); ?></h5>
                    </div>
                    <div class="col">
                        <label><?php echo e(trans('setting_tran.email')); ?></label>
                        <h5 class="card-title"><?php echo e($setting->email); ?></h5>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.content_'.$localeCode)); ?></label>
                            <h5 class="card-title"><?php echo e($setting->getTranslation('content', $localeCode)); ?></h5>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.team_'.$localeCode)); ?></label>
                            <h5 class="card-title"><?php echo e($setting->getTranslation('team', $localeCode)); ?></h5>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<div class="modal fade" id="edit<?php echo e($setting->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    <?php echo e(trans('general_tran.Edit_data')); ?> <?php echo e(trans('setting_tran.setting')); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="<?php echo e(route('admin.setting.update', ['id'=>$setting->id])); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(method_field('PUT')); ?>

                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <label for="title_<?php echo e($localeCode); ?>"
                                        class="mr-sm-2"><?php echo e(trans('setting_tran.Title_'.$localeCode)); ?>

                                    :</label>
                                <input id="title_<?php echo e($localeCode); ?>" value="<?php echo e($setting->getTranslation('title', $localeCode)); ?>" type="text" name="title_<?php echo e($localeCode); ?>" class="form-control">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <label for="address_<?php echo e($localeCode); ?>"
                                        class="mr-sm-2"><?php echo e(trans('setting_tran.address_'.$localeCode)); ?>

                                    :</label>
                                <input id="address_<?php echo e($localeCode); ?>" value="<?php echo e($setting->getTranslation('address', $localeCode)); ?>" type="text" name="address_<?php echo e($localeCode); ?>" class="form-control">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-12">
                                <label for="content_<?php echo e($localeCode); ?>"
                                        class="mr-sm-2"><?php echo e(trans('setting_tran.content_'.$localeCode)); ?>

                                    :</label>
                                    <textarea id="content_<?php echo e($localeCode); ?>" name="content_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"><?php echo e($setting->getTranslation('content', $localeCode)); ?></textarea>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-12">
                                <label for="team_<?php echo e($localeCode); ?>"
                                        class="mr-sm-2"><?php echo e(trans('setting_tran.team_'.$localeCode)); ?>

                                    :</label>
                                    <textarea id="team_<?php echo e($localeCode); ?>" name="team_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"><?php echo e($setting->getTranslation('team', $localeCode)); ?></textarea>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.logo')); ?></label>
                            <input type="file" name="logo" class="form-control">
                            <img src="<?php echo e(asset('Upload/'.$setting->logo)); ?>" alt="" style="height: 50px">
                        </div>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.favicon')); ?></label>
                            <input type="file" name="favicon" class="form-control">
                            <img src="<?php echo e(asset('Upload/'.$setting->favicon)); ?>" alt="" style="height: 50px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.facebook')); ?></label>
                            <input  type="text" name="facebook" class="form-control"
                                placeholder="<?php echo e(trans('setting_tran.facebook')); ?>" value="<?php echo e($setting->facebook); ?>">
                        </div>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.instagram')); ?></label>
                            <input  type="text" name="instagram" class="form-control"
                                placeholder="<?php echo e(trans('setting_tran.instagram')); ?>" value="<?php echo e($setting->instagram); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.phone')); ?></label>
                            <input type="text" name="phone" class="form-control"
                                placeholder="<?php echo e(trans('setting_tran.phone')); ?>" value="<?php echo e($setting->phone); ?>">
                        </div>
                        <div class="col">
                            <label><?php echo e(trans('setting_tran.email')); ?></label>
                            <input type="email" name="email" class="form-control"
                                placeholder="<?php echo e(trans('setting_tran.email')); ?>" value="<?php echo e($setting->email); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal"><?php echo e(trans('general_tran.Close')); ?></button>
                        <button type="submit"
                                class="btn btn-success"><?php echo e(trans('general_tran.Submit')); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\moh\resources\views/Backend/setting.blade.php ENDPATH**/ ?>