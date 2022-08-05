<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"><?php echo e(trans('initiatives_tran.Admin')); ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><?php echo e(trans('initiatives_tran.Admin')); ?></li>
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
                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleinitiative">
                    <?php echo e(trans('general_tran.Add')); ?> <?php echo e(trans('initiatives_tran.initiatives')); ?>

                </button>
                <br><br>

                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th><?php echo e(trans('initiatives_tran.Title')); ?></th>
                              <th><?php echo e(trans('initiatives_tran.Status')); ?></th>
                              <th><?php echo e(trans('initiatives_tran.Image')); ?></th>

                              <th><?php echo e(trans('general_tran.Events')); ?></th>
                          </tr>
                      </thead>
                      <tbody>
                            <?php $__currentLoopData = $initiatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$initiative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($index+1); ?></td>
                                    <td><?php echo e($initiative->title); ?></td>
                                    <td><?php echo e($initiative->status); ?></td>
                                    <td><img src="<?php echo e(asset('Upload/'.$initiative->image)); ?>" width="100" class="img-thumbnail" alt=""></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit<?php echo e($initiative->id); ?>"
                                                title="<?php echo e(trans('general_tran.Edit')); ?>"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete<?php echo e($initiative->id); ?>"
                                                title="<?php echo e(trans('general_tran.Delete')); ?>"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_initiative -->
                                <div class="modal fade" id="edit<?php echo e($initiative->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                <?php echo e(trans('general_tran.Edit_data')); ?> <?php echo e($initiative->name); ?>

                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="<?php echo e(route('admin.initiatives.update', ['id'=>$initiative->id])); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo e(method_field('PUT')); ?>

                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col">
                                                            <label for="title_<?php echo e($localeCode); ?>"
                                                                    class="mr-sm-2"><?php echo e(trans('initiatives_tran.Title_'.$localeCode)); ?>

                                                                :</label>
                                                            <input id="title_<?php echo e($localeCode); ?>" value="<?php echo e($initiative->getTranslation('title', $localeCode)); ?>" type="text" name="title_<?php echo e($localeCode); ?>" class="form-control">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="row">
                                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col">
                                                            <label for="description_<?php echo e($localeCode); ?>"
                                                                    ><?php echo e(trans('initiatives_tran.Description_'.$localeCode)); ?>

                                                                :</label>
                                                                <textarea id="description_<?php echo e($localeCode); ?>" name="description_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"><?php echo e($initiative->getTranslation('description', $localeCode)); ?></textarea>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="row">
                                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-12">
                                                            <label for="subject_<?php echo e($localeCode); ?>"
                                                                    ><?php echo e(trans('initiatives_tran.Subject_'.$localeCode)); ?>

                                                                :</label>
                                                                <textarea id="subject_<?php echo e($localeCode); ?>" name="subject_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"><?php echo e($initiative->getTranslation('subject', $localeCode)); ?></textarea>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="image"
                                                                class="mr-sm-2"><?php echo e(trans('initiatives_tran.Image')); ?>

                                                            :</label>
                                                        <input id="image" type="file" name="image" class="form-control" >
                                                        <img src="<?php echo e(asset('Upload/'.$initiative->image)); ?>" width="100" class="img-thumbnail" alt="">
                                                    </div>
                                                </div>
                                                <br><br>
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

                            <!-- delete_modal_initiative -->
                            <div class="modal fade" id="delete<?php echo e($initiative->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                <?php echo e(trans('general_tran.Delete')); ?>  <?php echo e($initiative->name); ?>

                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('admin.initiatives.destroy', ['id'=>$initiative->id])); ?>" method="post">
                                                <?php echo e(method_field('Delete')); ?>

                                                <?php echo csrf_field(); ?>
                                                <?php echo e(trans('general_tran.Warning_delet')); ?> <?php echo e($initiative->name); ?> ?
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                        value="<?php echo e($initiative->id); ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><?php echo e(trans('general_tran.Close')); ?></button>
                                                    <button type="submit"
                                                            class="btn btn-danger"><?php echo e(trans('general_tran.Submit')); ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>#</th>
                            <th><?php echo e(trans('initiatives_tran.Title')); ?></th>
                            <th><?php echo e(trans('initiatives_tran.Status')); ?></th>
                            <th><?php echo e(trans('initiatives_tran.Image')); ?></th>
                            <th><?php echo e(trans('general_tran.Events')); ?></th>
                        </tr>
                      </tfoot>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

        <!-- add_modal_initiative -->
    <div class="modal fade" id="exampleinitiative" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                        id="exampleModalLabel">
                        <?php echo e(trans('general_tran.Add')); ?> <?php echo e(trans('initiatives_tran.initiatives')); ?>

                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="<?php echo e(route('admin.initiatives.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <label for="title_<?php echo e($localeCode); ?>"
                                            class="mr-sm-2"><?php echo e(trans('initiatives_tran.Title_'.$localeCode)); ?>

                                        :</label>
                                    <input id="title_<?php echo e($localeCode); ?>" type="text" name="title_<?php echo e($localeCode); ?>" class="form-control">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <label for="description_<?php echo e($localeCode); ?>"
                                            ><?php echo e(trans('initiatives_tran.Description_'.$localeCode)); ?>

                                        :</label>
                                        <textarea id="description_<?php echo e($localeCode); ?>" name="description_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12">
                                    <label for="subject_<?php echo e($localeCode); ?>"
                                            ><?php echo e(trans('initiatives_tran.Subject_'.$localeCode)); ?>

                                        :</label>
                                        <textarea id="subject_<?php echo e($localeCode); ?>" name="subject_<?php echo e($localeCode); ?>" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="image"
                                        class="mr-sm-2"><?php echo e(trans('initiatives_tran.Image')); ?>

                                    :</label>
                                <input id="image" type="file" name="image" class="form-control" >
                            </div>
                        </div>
                        <br><br>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\moh\resources\views/Backend/initiatives.blade.php ENDPATH**/ ?>