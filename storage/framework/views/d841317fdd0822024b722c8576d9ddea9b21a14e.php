
<?php $__env->startSection('content'); ?>

    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(<?php echo e(asset('site/assets/images/form.jpg')); ?>);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">تبرع الان</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- donate section html start -->
    <div class="donate-section">
        <div class="container">
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
            <?php endif; ?>
            <form method="get" class="donate-form" action="<?php echo e(route('paypal.processTransaction')); ?>">
                <?php if($errors->has('amount_value')): ?>
                    <div class="alert alert-danger"><?php echo e($errors->first('amount_value')); ?></div>
                <?php endif; ?>
                <?php if(\Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(\Session::get('success')); ?></div>
                    <?php echo e(\Session::forget('success')); ?>

                <?php endif; ?>
                <div class="donate-amout form-inner">
                    <h3>تبرعك</h3>
                    <div class="form-wrap d-flex">
                        
                        <?php echo csrf_field(); ?>
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-50" value="50">
                            <label for="amount-50">$50</label>
                        </div>
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-100" value="100">
                            <label for="amount-100">$100</label>
                        </div>
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-200" value="200">
                            <label for="amount-200">$200</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="amount_value" id="amount_value" placeholder="أدخل مبلغ التبرع">
                        </div>
                        
                        <button type="submit" class="btn btn-info button-round"
                                id="checkout">ادفع الان
                        </button>
                        
                        
                        

                        


                    </div>
                </div>
            </form>


            <div class="donate-method form-inner">
                <h3>اختر طريقتك في الدفع</h3>
                <h3><i class="fab fa-paypal"></i></h3>


                <div id="showPayForm"></div>

            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\moh\resources\views/site/donte.blade.php ENDPATH**/ ?>