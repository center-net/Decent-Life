<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"><?php echo e(trans('main_trans.Dashboard')); ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><?php echo e(trans('main_trans.Dashboard')); ?></li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- row -->

    <div class="page-title">

    <!-- main body -->
    <div class="row">
      <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
          <div class="card-body">
           <h5 class="card-title">Repeating Forms </h5>
            <div class="repeater">
              <div data-repeater-list="group-a">
              <div data-repeater-item>
                 <form class=" row mb-30">
                   <div class="col-lg-2">
                      <input class="form-control" type="text" placeholder="Name" />
                   </div>
                   <div class="col-lg-2">
                     <input class="form-control" type="text" placeholder="Email" />
                   </div>
                   <div class="col-lg-2">
                     <textarea class="form-control" placeholder="Your Message">Your Message</textarea>
                   </div>
                    <div class="col-lg-2">
                     <input class="form-control" type="text" value="+(704) 279-1249" />
                   </div>
                   <div class="col-lg-2">
                    <div class="box">
                    <select name="select-input" class="fancyselect">
                      <option value="1">Sex</option>
                      <option value="2">Male</option>
                      <option value="3">Female</option>
                    </select>
                  </div>
                   </div>
                   <div class="col-lg-2">
                     <input class="btn btn-danger btn-block" data-repeater-delete type="button" value="Delete"/>
                   </div>
                </form>
              </div>
            <div data-repeater-item>
              <form class=" row mb-30">
                   <div class="col-lg-2">
                      <input class="form-control" type="text" placeholder="Name" />
                   </div>
                   <div class="col-lg-2">
                     <input class="form-control" type="text" placeholder="Email" />
                   </div>
                   <div class="col-lg-2">
                     <textarea class="form-control" placeholder="Your Message">Your Message</textarea>
                   </div>
                    <div class="col-lg-2">
                     <input class="form-control" type="text" value="+(704) 279-1249" />
                   </div>
                   <div class="col-lg-2">
                    <div class="box">
                    <select name="select-input" class="fancyselect">
                      <option value="1">Sex</option>
                      <option value="2">Male</option>
                      <option value="3">Female</option>
                    </select>
                    </div>
                   </div>
                   <div class="col-lg-2">
                     <input class="btn btn-danger btn-block" data-repeater-delete type="button" value="Delete"/>
                   </div>
                </form>
              </div>
          </div>
          <div class="row mt-20">
              <div class="col-12">
                <input class="button" data-repeater-create type="button" value="Add new"/>
              </div>
            </div>
        </div>
       </div>
    </div>
  </div>


  <div class="col-xl-6 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
         <h5 class="card-title">Repeating file</h5>
           <div class="repeater-file">
              <div data-repeater-list="group-a">
                 <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress4">Address</label>
                      <input type="text" class="form-control" id="inputAddress4" placeholder="17504 Carlton Cuevas">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity4">City</label>
                        <input type="text" class="form-control" id="inputCity4">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip4">Zip</label>
                        <input type="text" class="form-control" id="inputZip4">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                  <div data-repeater-item>
                    <div class="row mb-20">
                      <div class="col-md-6">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="col-md-2">
                         <input class="btn btn-danger btn-block" data-repeater-delete type="button" value="Delete"/>
                       </div>
                     </div>
                 </div>
                </form>
             </div>
           <div class="clearfix">
                <input class="button" data-repeater-create type="button" value="Add new file"/>
            </div>
        </div>
       </div>
    </div>
  </div>

   <div class="col-xl-6 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
         <h5 class="card-title">Repeating Address </h5>
           <form>
            <div class="repeater-add">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail5">Email</label>
                  <input type="email" class="form-control" id="inputEmail5" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword5">Password</label>
                  <input type="password" class="form-control" id="inputPassword5" placeholder="Password">
                </div>
              </div>
              <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row mb-20">
                  <div class="col-md-6">
                    <label for="inputAddress5">Address</label>
                    <input type="text" class="form-control" id="inputAddress5" placeholder="Enter your address">
                  </div>
                   <div class="col-md-2">
                   <input class="btn btn-danger btn-block mt-30" data-repeater-delete type="button" value="Delete"/>
                 </div>
                </div>
              </div>
               </div>
               <div class="form-group clearfix mb-20">
                 <input class="button" data-repeater-create type="button" value="Add shipping Address"/>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity5">City</label>
                  <input type="text" class="form-control" id="inputCity5">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputZip5">Zip</label>
                  <input type="text" class="form-control" id="inputZip5">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Check me out
                  </label>
                </div>
              </div>
               <div class="form-group mb-0">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile1">
                    <label class="custom-file-label" for="customFile1">Choose file</label>
                  </div>
               </div>
            </div>
          </form>
       </div>
    </div>
  </div>

<!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\moh\resources\views/empty.blade.php ENDPATH**/ ?>